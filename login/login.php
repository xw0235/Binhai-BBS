<?php

include('../config.php');

header("Content-Type: text/html;charset=utf-8");
session_start();

if (!isset($_POST['submit'])) {
    header("Location:../index.php");
}

$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];

//检测用户名及密码是否正确
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$check_query = mysqli_query($conn, $sql);
if ($result = mysqli_fetch_array($check_query)) {
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $result['password'];
    header("Location:../index.php");
} else {
    echo "<script>alert('用户名或密码错误,请重新登录!');parent.location.href='index.html';</script>";
}

?>
