<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    echo "登录成功!";
} else {
    echo "你还没有登录，<a href='../login/index.html'>请登录</a>";
}
?>