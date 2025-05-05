<?php
echo "Вивести на екран скільки днів залишилося до дня народження." . "<br>";
$birthday = mktime(0,0,0, 5, 21,date("Y"));
$day = floor(($birthday-time())/60/60/24);
echo "Залишилось: ", $day,"<br>";