<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<a href="https://www.codewars.com/kata/55902c5eaa8069a5b4000083/train/php">Посилання а задачу про долари</a>
<br>
<?php
    function format_money(float $amount): string {
    return '$' . number_format($amount, 2, '.', '');
    }
    echo format_money(9);
?>
</body>
</html>