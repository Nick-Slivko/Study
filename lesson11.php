<?php
define("SERVERNAME","127.127.126.50");
define("DB_LOGIN","root");
define("DB_PASSWORD","");
define("DB_NAME","new_db");


$connect = new mysqli(SERVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "UPDATE `heroes` SET `age`= 22 WHERE `name`='Кіріл'";
if ($connect->query($sql) === TRUE) {
    echo "Record update successfully";
}else echo "Eror record";
$connect->close();





