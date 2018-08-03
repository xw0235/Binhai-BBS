<?php
require "../confing.php";

$sql = "SELECT * FROM user ORDER BY id DESC LIMIT 10";
$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_array($result)) {
	echo "用户名:".$row['username']."<br>内容:".$row['content']."<hr>";
}

?>