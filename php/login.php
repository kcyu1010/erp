<?php
header("Content-Type: application/json;charset=utf-8");
$settings = parse_ini_file ("./config.ini", true);
$host = $settings["db"]["host"];
$user = $settings["db"]["user"];
$password = $settings["db"]["password"];
$database = $settings["db"]["database"];
$usr = $_POST["usr"];
$pwd = $_POST["pwd"];


$conn = mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno($conn)){
    $arr = array("status"=>200,"msg"=>"数据库连接失败，请检查网络连接");
    exit(json_encode($arr));
}

$sql = "SELECT password FROM user WHERE username='{$usr}'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if(count($row)!=0){
    if($row[0] == $pwd){
        $arr = array("status"=>100,"msg"=>"登陆成功");
        $_SESSION['user']= $usr;
        setcookie('user',$usr,time()+(60*60*24*30));
        setcookie('is_Login',1,time()+(60*60*24*30));
        header('Location: '."./index.php");
    }else{
        $arr = array("status"=>101,"msg"=>"登陆失败，请检查账号和密码");
        exit(json_encode($arr,JSON_UNESCAPED_UNICODE));
    }
}else{
    $arr = array("status"=>300,"msg"=>"账号可能未注册");
    exit(json_encode($arr,JSON_UNESCAPED_UNICODE));
}
?>