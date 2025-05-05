<form action="#" method ="POST">
<input type="text" name="name" id="" placeholder="Введи имя"><br>
<label for="check">Мне уже есть 18 лет</label>
<input type="checkbox" name="age" id="check"><br><br>
<input type="submit" value="вход" name = "submit">
</form>

<?php

if(isset ($_POST['submit'])){

    $name = trim($_POST['name']);
    if(!preg_match('&^[a-zA-ZА-Яа-яёЁ]+$&u',$name)){
        exit ("Некорректное имя");
    }
    $age_check = $_POST['age']?? '0';
    if($age_check == 'on'){
        echo "$name: доступ разрешен";
    }
    else echo "$name: доступ запрещен - вам нет 18 лет !";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<ul class="menu">
        <li><a href="?name=form">Form</a></li>
        <li><a href="?name=blog">Blog</a></li>
        <li><a href="?name=shop">Shop</a></li>
        <li><a href="?name=about">About</a></li>
    </ul>

<div class="content">

<?

$site_name = $_GET['name']??'0';
switch ($site_name){
    case 'form':
        require_once "lesson1.php";
        break;
    case 'blog':
        require_once "lesson2.php";
        break;
    case 'shop':
        require_once "lesson3.php";
        break;
    case 'about':
        require_once "lesson5.php";
        break;
    default:
    echo "<br>А это дефолтная страница";
}
?>
</body>
</html>
