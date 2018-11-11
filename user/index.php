<?php
header("Content-Type: text/html;charset=utf-8");
session_start();

// 禁止直接访问
if (!$_SESSION['username']) {
    echo "<script>alert('禁止非法访问!');parent.location.href='../index.php';</script>";
    exit;
}


?>

<html>
<head>
    <style>
        p {
            text-align: center;
            color: #CC5522;
        }
    </style>
</head>
<body>

</body>
</html>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p><?php echo $_SESSION['username']; ?></p>
<p>就在下面这里, 暂时还没有</p>
<p>正在开发中......</p>
<hr>
<p><a href="../index.php">点此返回首页</a></p>
