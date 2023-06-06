<?php
    $par = $_GET["par"];
    $cens = $_GET["cens"];
    $pCens = str_replace($cens, '***', $par);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Form</title>
    <link rel="stylesheet" href="style.scss">
</head>
<body id="res">
    <div>
        <span>Il paragrafo che hai scritto è:</span>
        <p><?= $par ?></p>
        <span>E' lungo: <?= strlen($par) ?></span>
    </div>
    <div>
        <span>Il paragrafo censurato invece è:</span>
        <p><?= $pCens ?></p>
        <span>E' lungo: <?= strlen($pCens) ?></span>
    </div>
</body>
</html>