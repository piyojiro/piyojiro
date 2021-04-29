<?php
require_once __DIR__. 'vendor/autoload.php';
$inputString = file_get_contents('php://input');
error_log($inputString);
?>

<!-- 最新のHTMLで書かれる事を示す -->
<!DOCTYPE html>
<html>
<head>
　<!-- ホームページのタイトル -->
　<title id="title1">ざぶちゃん</title>
　<!-- 文字化けの防止 -->
  <meta http-equiv="content-type" charset="utf-8">
</head>
<body>
<!-- タイトル文字 -->
<h1 id="title2">生年月日を入力してみよう</h1>
<label for="year">西暦</label>
<!-- ホームページの終了 -->
</body>
</html>