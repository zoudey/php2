<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="/">chuyeenr</a><br>
    <?php
    foreach ($product as $pro): ?>
    <a href="detail?id=<?= $pro->id ?>"><?= $pro->name ?></a><br>
    <?php endforeach ?>
</body>
</html>