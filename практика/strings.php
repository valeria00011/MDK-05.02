<h1>Работа со строками</h1>
<h2>Создание строк</h2>
<?php
$str1 = 'Hello';
$str2 = "world";
?>
<h2>Соединение строк</h2>
<?php
echo $str1 . ', ' . $str2 . '!';
?>
<h2>Обращение по индексу</h2>
<?php
$sym = $str1[2];
$str1[0] = 'W';
echo $str1;
?>
<h2>Получение длины строки</h2>
<?php
$len = strlen($str1);
echo "Длина строки $str1 - " . strlen($str1) . " символов";
echo "<br>";
echo "Длина строки $str1 - $len символов";
?>