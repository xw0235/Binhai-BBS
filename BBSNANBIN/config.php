<?php

$conn = @mysqli_connect("localhost","root","");
if (!$conn){
    die("连接数据库失败：" . mysqli_error($conn));
}
@mysqli_select_db($conn, "bbsnanbin");
?>
