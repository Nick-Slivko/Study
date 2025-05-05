<?php
echo 'Створити по одній змінній з типами string, integer, float, boolean, array, null (вивести інформацію про змінну функцією
var dump) пояснити самому собі що вивело на екран.' . "<br/>";
$str = "Hi";
$num = 5;
$fl = 3.5;
$bo = true;
$nu = null;
$arr = [346, 3446, 375, 257, 2574];

echo var_dump($str) . "<br>";

echo var_dump($num) . "<br>";

echo var_dump($fl) . "<br>";

echo var_dump($bo) . "<br>";

echo "<pre>";
echo var_dump($arr) . "<br>";
echo "</pre>";

echo var_dump($nu) . "<br>";



?>