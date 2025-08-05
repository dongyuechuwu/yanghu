<?php
session_start();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>设备养护电子档案系统</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="/assets/js/main.js"></script>
</head>
<body>
<header class="main-header">
    <h1>设备养护电子档案系统</h1>
    <?php if ($user): ?>
        <span>欢迎，<?php echo htmlspecialchars($user['name']); ?>（<?php echo $user['role']; ?>）</span>
        <a href="/pages/logout.php">退出登录</a>
    <?php else: ?>
        <a href="/pages/login.php">登录</a>
    <?php endif; ?>
</header>
<main>
