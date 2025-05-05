<?php
$name = "Nick";
$age = 17;
const CITY = "Zhytomyr";
echo '1.Завдання вивести речення: Мене звати (ім\'я), мені (вік) років, я з міста (Константа-місто); наприкінці перенесення рядка <br>';

echo $text = "Мене звати $name, мені $age років, я з міста " . CITY . "<br>";

echo '2.Записати весь текст у змінну $text = <br>';

echo $text;

echo '3.Створити константу кольору та вставити її в стиль параграфа в Html (&lt;p style=color:###&gt;Текст із минулого завдання/p&gt;)';

const COLORS = ['red', 'blue', 'green'];
echo " <p style='color: " . COLORS[1] . "'>  $text   </p> ";

?>