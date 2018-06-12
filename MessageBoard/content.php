<?php
/**
 * Created by PhpStorm.
 * User: byoji
 * Date: 2018/6/12
 * Time: 12:37
 */

// 连接数据库
$link = mysqli_connect("localhost", "root", "toor");
mysqli_select_db($link, "messageboard");
mysqli_set_charset($link, "utf8");

$sql = "SELECT * FROM messageboard ORDER BY id DESC LIMIT 10";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
	echo "用户名:".$row['user']."<br>内容:".$row['content']."<hr>";
}

?>