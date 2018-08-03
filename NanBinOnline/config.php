<?php
/*****************************
*数据库连接
*****************************/
$conn = @mysqli_connect("localhost","root","");
if (!$conn){
    die("连接数据库失败：" . mysqli_error());
}
mysqli_select_db($conn, "messageboard")
?>