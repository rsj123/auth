<?php

//数据库链接操作 PDO方式
$dsn = 'mysql:host=localhost;dbname=register';
$username = 'root';
$password = '123456';
$db = new PDO($dsn, $username, $password);

echo "连接数据库成功！";

