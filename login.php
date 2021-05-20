<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <title>登录</title>
</head>
<body>
    <div id="LoginBox">
    <h4 style="text-align: center;">ERP 登录</h4>
    <div class="form-group">
        <label>账号</label>
        <select type="text" class="form-control" style="width: 90%;margin:auto" id="user">
        </select>
        <label>密码</label>
        <input type="password" class="form-control" style="width: 90%;margin:auto" id="password">
        <p style="width: 90%;">
            <button class="btn btn-primary" style="width: 100%;margin-top:20px">登录</button>
        <p>
        
    </div>
    </div>

</body>
</html>
<script>
    $(function(){
        $.get("./php/user.php",function (data,status) {
            var array = data["content"];
            for(var a=0;a<array.length;a++){
                $("select").append("<option value=\""+array[a][1]+"\">"+array[a][1]+"</option>")
            }
        })

        $("button").click(function(){
            login();
        })

        $("#password").keyup(function (event) {
            if(event.keyCode == 13){
                login();
            }
        })
    })

    var login = function () {
        let user = $("#user").val();
        let password = $("#password").val();
        if(user.length !=0 && password.length !=0){
            $.post("./php/login.php",
                {
                    "usr":user,
                    "pwd":password
                })
        }
    }

</script>
<style>
    body{
        background-image: url("./img/bg.jpeg");
    }

    #LoginBox{
        background-color: rgba(red, green, blue, alpha);
        width: 80%;
        height: 20rem;
        margin-left: auto;
        margin-right: auto;
        margin-top: 60px;
        border-radius: 10px;
        max-width: 500px;
    }

    span{
        text-align: center;
    }

    input{
        border-radius: 10px;
    }

    label{
        margin-left: 20px;
    }

    p{
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

</style>