<?php
echo "1. \$arr = [<br>" .
     "    ['name'=>'iphone','price'=>30000],<br>" .
     "    ['name'=>'macbook','price'=>130000],<br>" .
     "    ['name'=>'macpro','price'=>430000]<br>" .
     "];<br>" .
     "- Збільшити вартість товару на 30%<br>" .
     "- Вивести весь товар: ціна iphone = 39000$; (за допомогою циклу foreach)" . "<br>";

$arr = [
    ['name'=>'iphone','price'=>30000],
    ['name'=>'macbook','price'=>130000],
    ['name'=>'macpro','price'=>430000]
];
echo "<br>";

foreach ($arr as $v){
    $q = $v['price'] + $v['price'] * 0.3;
    echo "ціна " . $v['name'] . " = " . $q . '$' ."<br>";
}

echo "<br>";

echo "2. Створити масив зі значеннями від 1 до 100 (використовуючи функцію), знайти суму чисел" . "<br>";

$num = range(1,100);
echo array_sum($num) . "<br>";
echo "<br>";

echo "3. Створити масив зі значеннями від (a-z) і об’єднати їх у рядок" . "<br>";

$abc = range('a','z');
echo implode($abc);