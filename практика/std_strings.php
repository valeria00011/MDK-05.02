<h1>Стандартные функции для строк</h1>
<h2>strlen</h2>
<?php
$str = 'Hello, world';
$strR = 'Привет, мир';
echo "Длина str - " . strlen($str) . " символов", "<br>";
echo "Длина strR - " . mb_strlen($strR) . " символов", "<br>";
?>
<h2>Поиск символа - strpos и mb_strpos</h2>
<?php
$strTemp = strpos($str, 'world');
echo "Позиция world - $strTemp";

$strTempp = mb_strpos($strR, 'мир');
echo "<br>" . "Позиция world - $strTempp";
?>
<h2>Изменение регистра - strtolower и mb_strtolower</h2>
<?php
$strLow = strtolower($str);
echo "Строка в нижнем регистре - $strLow" . "<br>";
$strLoww = mb_strtolower($strR);
echo "Строка в нижнем регистре - $strLoww";
?>
<h2>Поиск подстроки - substr</h2>
<?php
echo substr($str, 7), "<br>";
?>

<h2>Переворот строки - strrev</h2>
<?php
echo strrev($str);
?>

<h2>Превращение строки в массив - explode</h2>
<?php
$str1 = 'Работа со строками';
$arr = explode(' ', $str1);
var_dump($arr);
?>

<h2>Превращение массива в строку - implode</h2>
<?php
$str2 = implode('; ',$arr);
echo $str2;
?>