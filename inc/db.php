<?php
// SQLite数据库连接
$db = new PDO('sqlite:' . __DIR__ . '/../db/yanghu.sqlite3');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 自动创建数据库文件夹（首次安装用）
if (!file_exists(__DIR__ . '/../db')) mkdir(__DIR__ . '/../db', 0777, true);
?>