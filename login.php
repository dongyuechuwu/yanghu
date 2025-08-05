<?php
require_once __DIR__ . '/inc/db.php';
session_start();
$error = ''; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // 默认账户 admin/123456
    if ($user === 'admin' && $pass === '123456') {
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit;
    } else {
        $error = '账号或密码错误';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>登录 - 养护系统</title>
</head>
<body>
    <h2>登录养护系统</h2>
    <form method="post">
        用户名: <input type="text" name="username"><br>
        密码: <input type="password" name="password"><br>
        <button type="submit">登录</button>
    </form>
    <div style="color:red;"><?php echo $error; ?></div>
</body>
</html>