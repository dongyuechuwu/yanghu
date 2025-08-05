<?php
require_once __DIR__ . '/inc/db.php';
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>养护系统首页</title>
</head>
<body>
    <h1>欢迎进入养护管理系统</h1>
    <p><a href="logout.php">退出登录</a></p>
</body>
</html>