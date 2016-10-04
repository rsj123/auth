<?php

//数据库链接操作 PDO方式
//初始化pdo连接数据
$dsn = 'mysql:host=localhost;dbname=register';
$username = 'root';
$password = '123456';

try {
    //创建pdo连接
    $db = new PDO($dsn, $username, $password);
    //设置pdo异常模式
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //显示连接成功信息
    //echo "连接数据库成功！";
} catch (Exception $ex) {
    //显示连接失败信息
    //echo "连接数据库失败！".$ex->getMessage();
}


