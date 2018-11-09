<?php
header("Content-Type: text/html;charset=utf-8");
$username = htmlspecialchars($_POST['username']);  
$password = $_POST['password'];  
   
//包含数据库连接文件  
include('../config.php');  
//检测用户名及密码是否正确  
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$check_query = mysqli_query($conn, $sql);  
if($result = mysqli_fetch_array($check_query)){  
    //登录成功  
    session_start();  
    $_SESSION['username'] = $username;  
    $_SESSION['password'] = $result['password'];  
	header("Location:../index.php");
}  else {
	echo "<script>alert('用户名或密码错误,请重新登录!');parent.location.href='index.html';</script>";
}

?>