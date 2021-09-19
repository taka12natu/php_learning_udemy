<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
date_default_timezone_set('Asia/Tokyo');
print(date('G'));

if (date('G') < 9) {
    print('※現在は受付時間外です。');
} else {
    print('ようこそ');
}

$x = 'あいうえお';
if ($x !== '') {
    print('xには文字が入っています');
}

// 上記と同じ
$x = 'あいうえお'; // true/false
if ($x) {
    print('xには文字が入っています');
}

$x = 0; // 0=false, 0以外=true
if ($x) {
    print('xは0ではありません');
}

$x = 0; // "!"で結果が反転
if (!$x) {
    print('xは0です');
}

?>
</pre>
</main>
</body>    
</html>