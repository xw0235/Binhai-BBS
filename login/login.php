<?php

include('../config.php');

header("Content-Type: text/html;charset=utf-8");
session_start();

$username = htmlspecialchars($_POST['username']);
$password = md5($_POST['password']);

function redirect($url, $msg)
{
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<p style='text-align: center'>" . $msg . "</p></br>\n";
    echo "<p style='text-align: center'>页面将在3秒后自动跳转登陆页面...</p></br>\n";
    echo "<a href=\"" . $url . "\"><p style='text-align: center'>如果没有跳转，请点这里跳转</p></a>\n";
    echo "<script language=\"javascript\">setTimeout(\"window.location.href='" . $url . "'\",3000)</script>";
}


//检测用户名及密码是否正确
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$check_query = mysqli_query($conn, $sql);
if ($result = mysqli_fetch_array($check_query)) {
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $result['password'];

    redirect("../index.php", "  登陆成功");


} else {
    echo "<script>alert('用户名或密码错误, 请重新登录!');parent.location.href='../index.php';</script>";
}

?>
