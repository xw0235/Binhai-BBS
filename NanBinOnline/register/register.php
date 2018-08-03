<?php
session_start();

include('../config.php');

// 禁止直接访问register.php
if(!isset($_POST['submit'])){
    exit('非法访问!');
}

$username = $_POST['username'];
$password = $_POST['password'];


// 判断用户是否存在
$checkUserSql = mysqli_query($conn,"select username from user where username='$username' limit 1");
if(mysqli_fetch_array($checkUserSql)){
    echo '错误：用户名 ',$username,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
    exit;
}

// 判断用户是否填入相应数据
$writeInfoSql = "INSERT INTO user(username,password)VALUES('$username', '$password')";
if (empty($username) || !$_POST['submit']) {
	echo "<script>alert('用户名不能为空!');parent.location.href='index.html';</script>";
} else if(empty($password) || !$_POST['submit']) {
	echo "<script>alert('密码不能为空!');parent.location.href='index.html';</script>";
} else { // 写入数据库
	mysqli_query($conn, $writeInfoSql);
	echo "<script>alert('注册成功, 返回首页!');parent.location.href='../index.html';</script>";
}
?>