<?php
    $settings = parse_ini_file ("./config.ini", true);
    $host = $settings["db"]["host"];
    $user = $settings["db"]["user"];
    $password = $settings["db"]["password"];
    $database = $settings["db"]["database"];

    $conn = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_errno($conn)){
        $arr = array("status"=>200,"msg"=>"数据库连接失败，请检查网络连接");
        exit(json_encode($arr));
    }

    $sql = "SELECT id,username,right_list,group_list FROM user";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_all($query);
    header("Content-Type: application/json;charset=utf-8");
    $row = array("status"=>200,"content"=>$row);
    echo json_encode($row,JSON_UNESCAPED_UNICODE);

?>