<?php

header("Content-Type: text/html;charset=utf-8");
//error_reporting(E_ALL);
//ini_set('display_errors', true);
date_default_timezone_set("PRC");   //系统使用北京时间

define('DBHOST', '127.0.0.1');
define('DBNAME', 'bbsnanbin'); //数据库名称
define('DBUSER', 'root'); //数据库用户名
define('DBPWD', ''); //数据库密码

$conn = @mysqli_connect(DBHOST, DBUSER, DBPWD);
@mysqli_query($conn, "SET NAMES utf8;");

@mysqli_select_db($conn, DBNAME);

function inject_check($sql_str) { //防止注入
    $check = preg_match('/select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i', $sql_str);
    if ($check) {
        return 202; //疑似恶意代码
    } else {
        return $sql_str;
    }
}

