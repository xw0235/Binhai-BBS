<?php
header("Content-Type: text/html;charset=utf-8");

session_start();

include('../config.php');

if (!isset($_POST['submit'])) {
    header("Location:../index.php");
}


$username = htmlentities($_POST['username']);
$password = $_POST['password'];


// 判断用户是否存在
$checkUserSql = mysqli_query($conn, "select username from user where username='$username' limit 1");
if (mysqli_fetch_array($checkUserSql)) {
    echo "<script>alert('此学号已被注册, 请重新输入'); window.history.back();</script>";
    exit;
}

// 写入数据库
$writeInfoSql = "INSERT INTO user(username,password)VALUES('$username', '$password')";
if (is_numeric($username)) {
    mysqli_query($conn, $writeInfoSql);
    echo "<script>alert('注册成功, 现在可以登录了'); parent.location.href='../index.php';</script>";
} else {
    echo "<script>alert('兄弟你确定你输入的是学号?'); parent.location.href='index.html';</script>";
}
?>
