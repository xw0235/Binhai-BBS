<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>虚拟校园平台</title>
    <link rel="stylesheet" type="text/css" href="assets/css/xiaoyuan.css">
    <link rel="stylesheet" type="text/css" href="assets/css/css.css">
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
</head>
<body>
<div id="header">
    <div id="a1" class="auto">
        <div class="logo1">
            <h1>
                <img width="135" src="images/tupian/xiaohuigai.jpg"/>
            </h1>
        </div>
        <div class="logo2">
            <h1>
                <img width="850" src="images/tupian/timu.jpg"/>
            </h1>
        </div>
    </div>
    <div id="a2" class="auto">
    </div>
    <div id="a3" class="auto">
        <div class="left">
            <dl>
                <dt>更新日志</dt>
                <dd class="txt">2018年11月27日</dd>
                <dd class="txt">- 把学长给的和自己做的整合了一下</dd>
                <dd class="txt">bug：</dd>
                <dd class="txt">登录和注册页面的footer显示的位置不正确</dd>
            </dl>
        </div>
        <div class="left">
            <dl>
                <!--
                <dd class="ckgd"><a href="login/index.html">登陆</a></dd>
                <br>
                <dd class="ckgd"><a href="register/index.html">注册</a></dd>
                -->
                <?php
                if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
                    echo "<dd class=\"ckgd\"><a href='user/index.php'>个人中心</a></dd><br>";
                    echo "<dd class=\"ckgd\"><a href='login/loginout.php'>退出登陆</a></dd>";
                } else {
                    echo "<dd class=\"ckgd\"><a href=\"login/index.html\">登陆</a></dd><br><dd class=\"ckgd\"><a href=\"register/index.html\">注册</a></dd>";
                }
                ?>
            </dl>
        </div>
    </div>
</div>
<div id="main">
    <div id="main1">
        <div id="wrap">
            <div id="leftb">
                <div class="leftt1">
                    <h2>校园全景图</h2>
                </div>
                <div id="html_1">
                    <iframe align="center" width="1350" height="750" src="images/7/7.html" frameborder="no" border="0"
                            marginwidth="0" marginheight="0" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <p class="f1">
        <a href="index.php" target="_black">首页</a>
        <a href="http://binhai.nankai.edu.cn/" target="_black">校园</a>
        <a class="last" href="#" target="_black">联系我们</a>
    </p>
    <p>
        Copyright (c) 2018 | 嘿嘿嘿
    </p>
</div>


<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/jquery.min.js"><\/script>')</script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>


</body>
</html>