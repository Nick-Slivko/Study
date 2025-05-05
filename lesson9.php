<?php
echo "1. Приймаємо вхідні дані:<br>" .
    "- Рядок з ім'ям користувача (наприклад, 'andriy')<br>" .
    "- Ціле число (наприклад, -25)<br><br>" .

    "2. Виконуємо наступні дії з числом:<br>" .
    "- Вивести модуль числа за допомогою функції abs()<br>" .
    "- Обчислити квадратний корінь з модуля числа за допомогою sqrt()<br>" .
    "- Піднести число до третього ступеня за допомогою pow()<br><br>" .

    "3. Обробляємо ім'я користувача:<br>" .
    "- Зробити першу букву великою за допомогою ucfirst()<br>" .
    "- Перетворити усе ім'я у верхній регістр за допомогою strtoupper()<br>" .
    "- Вивести ім'я у зворотному порядку за допомогою strrev()<br>" .
    "- Визначити кількість символів у імені за допомогою strlen() або mb_strlen()<br>" .
    "- Безпечно вивести ім'я для HTML-сторінки за допомогою htmlspecialchars()<br><br>" .

    "4. Додатково:<br>" .
    "- Згенерувати випадкове число від 1 до 100 за допомогою mt_rand() та вивести як 'бонусний бал'.<br>";

echo "<br>";
echo "1." . "<br>";

$name = "nick";
$age = -17;

echo "$name" . "<br>";
echo "$age" . "<br>";

echo "<br>";
echo "2." . "<br>";

$age = abs($age);
$sqrtAge = sqrt($age);
$powAge = pow($age, 3);

echo "$age" . "<br>";
echo "$sqrtAge" . "<br>";
echo "$powAge" . "<br>";

echo "<br>";
echo "3." . "<br>";

$name = ucfirst($name);
$topName = strtoupper($name);
$reversedName = strrev($name);
$longName = strlen($name);

echo "$name" . "<br>";
echo "$topName" . "<br>";
echo "$reversedName" . "<br>";
echo "$longName" . "<br>";
echo htmlspecialchars("<p> Hello World without HTML </p>") . "<br>";

echo "<br>";
echo "4." . "<br>";
echo mt_rand(1, 100);
