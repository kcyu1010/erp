<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./style.css">
    <title>管理员</title>
    <style type="text/css">
    
        *{
            padding: 0;
            margin: 0;  
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="content-left">
            <div class="left-title">
                <a href="#">江门顺丰</a>
            </div>
            <div class="seg"></div>
            <div class="nav">
                <!--菜单-->
                <div class="nav-menu">
                    <div class="nav-title">首页</div>
                    <div class="nav-content">
                        <a href="#">首页</a>
                    </div>
                </div>
                <div class="nav-menu">
                    <div class="nav-title">销售部</div>
                    <div class="nav-content">
                        <a href="#">客户订单</a>
                        <a href="./xsd.html">销售单</a>
                        <a href="#">客户订单列表</a>
                        <a href="#">销售退货</a>
                    </div>
                </div>
                <div class="nav-menu">
                    <div class="nav-title">入仓管理</div>
                    <div class="nav-content">
                        <a href="#">进货订单</a>
                        <a href="#">进货单</a>
                        <a href="#">入仓退货单</a>
                        <a href="#">入仓退货列表</a>
                    </div>
                </div>
                <div class="nav-menu">
                    <div class="nav-title">人员管理</div>
                    <div class="nav-content"  id="now-content">
                        <a href="#">人员管理</a>
                        <a href="#">权力管理</a>
                    </div>
                </div>
                <div class="nav-menu">
                    <div class="nav-title">退出登录</div>
                    <div class="nav-content">
                        <a href="login.php">退出</a>
                    </div>
                </div>
            </div>
        </div>
        <button id="cancelHide">》</button>
        <div class="content-right">
            <h1>操作员管理</h1>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
    $(function(){
        $(".nav-content").hide();
        $("#now-content").show();
        $("#cancelHide").hide();

        $(".nav-title").each(function(){
            $(this).click(function(){
                var navConEle = $(this).parents(".nav-menu").children(".nav-content")
                navConEle.slideToggle();
                
            })
        })

        $(".left-title").click(function(){
            $(".content-left").animate({
                width:"toggle"
            })
            $("#cancelHide").show();
        })

        $("#cancelHide").click(function(){
            $(".content-left").animate({
                width:"toggle"
            })
            $("#cancelHide").hide();
        })
    })
</script>
<style>
    h1,h2{
        text-align: center;
    }

    #cancelHide{
        position: fixed;
        left: -5px;
        top:0;
        width: 50px;
        height: 50px;
        background-color: #1c232f;
        color: #cccccc;
        border-radius: 10px;
    }
</style>