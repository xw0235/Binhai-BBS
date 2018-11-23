<?php
header("Content-Type: text/html;charset=utf-8");

session_start();

include('../config.php');

if (!isset($_POST['submit'])) {
    header("Location:../index.php");
}


$username = htmlentities($_POST['username']);
$password = md5($_POST['password']);


// 判断用户是否存在
$checkUserSql = mysqli_query($conn, "select username from user where username='$username' limit 1");
if (mysqli_fetch_array($checkUserSql)) {
    echo "<script>alert('此学号已被注册, 请重新输入'); window.history.back();</script>";
    exit;
}


function redirect($url, $msg) {
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p style='text-align: center'>" . $msg ."</p></br>\n";
    echo "<p style='text-align: center'>页面将在3秒后自动跳转登陆页面...</p></br>\n";
    echo "<a href=\"".$url."\"><p style='text-align: center'>如果没有跳转，请点这里跳转</p></a>\n";
    echo "<script language=\"javascript\">setTimeout(\"window.location.href='".$url."'\",3000)</script>";
}



$writeInfoSql = "INSERT INTO user(username,password)VALUES('$username', '$password')";
if (is_numeric($username) && strlen($username) == 8) {  // 判断用户是否输入的是学号
    @mysqli_query($conn, $writeInfoSql);
    // echo "<script>alert('注册成功, 现在可以登录了'); parent.location.href='../index.php';</script>";
    redirect("../login/index.html", "恭喜你 " . $username .  "  注册成功");
} else {
    echo "<script>alert('请输入8位学号用以注册'); parent.location.href='index.html';</script>";
}
?>
