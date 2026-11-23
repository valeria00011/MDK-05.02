<h1>Функции для массивов</h1>
<h2>Первый элемент - array_first()</h2>
<?php
$nums = [2, 43, 5, 77, 8];
//echo array_first($nums); //php>8.5
?>

<h2>Слияние массивов - array_merge()</h2>
<?php
$nums2 = [4, 34, 5];
$res = array_merge($nums, $nums2);
var_dump($res);
?>

<h2>Замена ключей и значений местами - </h2>
<?php
var_dump(array_flip($nums));
?>
<h2>Поиск элемента - array_search</h2>
<?php
echo array_search(77, $nums);
?>

<h2>Переворот - array_reverse</h2>
<?php
var_dump(array_reverse($nums));
?>

<h2>Функции, изменяющие массив - sort</h2>
<?php
sort($nums);
var_dump($nums);
?>

<h2>Перемешивание - shuffle</h2>
<?php
shuffle($nums);
var_dump($nums);
?>