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
print (date('w')); //数字で曜日を表す

$week_name = ['日','月','火','水','木','金','土','日'];

// print ($week_name); エラーになる
print ($week_name[1]); //「月」が表示

$week = 4 + 1;
print($week_name[$week]);

print($week_name[date('w')]); //今日の曜日を表示

?>
</pre>
</main>
</body>    
</html>