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
// テキストファイルを変更するだけで反映できる
// $news = file_get_contents('../../news_date/news.txt');
// print($news);

//他のやり方
// readfile('../../news_date/news.txt');

 $news = file_get_contents('../../news_date/news.txt');
 $news .= "\n2021-08-30 ニュースを追加しました";
 $news = "2021-09-10 ニュースを追加しました\n" . $news;
 file_put_contents('../../news_date/news.txt', $news);
 print($news);
?>
</pre>
</main>
</body>    
</html>