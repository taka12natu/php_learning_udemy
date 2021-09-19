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
//連想配列
$fruits = ['apple' => 'りんご',
           'grape' => 'ぶどう',
           'lemon' => 'レモン'
        ];
print($fruits['lemon']);

foreach ($fruits as $val) {
    print ($val . "\n");
}

// keyを表示
foreach ($fruits as $english => $japanese) {
    print ($english . ':' . $japanese . "\n");
}
?>
</pre>
</main>
</body>    
</html>