<?php
/**
 * Created by PhpStorm.
 * User: byoji
 * Date: 2018/6/12
 * Time: 2:06
 */

// 连接数据库
$link = mysqli_connect("localhost", "root", "toor");
mysqli_select_db($link, "messageboard");
mysqli_set_charset($link, "utf8");

$user = $_POST['username'];
$content = $_POST['content'];

$sql= "INSERT INTO messageboard (user, content) VALUE('$user', '$content')";
mysqli_query($link, $sql);
echo "留言成功 <a href='content.php'>点击查看留言";
?>

