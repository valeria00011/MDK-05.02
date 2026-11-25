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

<h2>Применение функции к каждому элементу массив - array_map()</h2>
<?php
$nums = [2, -43, 5, -77, 8];
function double($a)
{
    return $a * 2;
}
$doubleNums = array_map('double', $nums);
var_dump($doubleNums);
?>

<h2>Фильтрация массива - array_filter()</h2>
<?php
function isPositive($a)
{
    return $a > 0;
}
var_dump(array_filter($nums, 'isPositive'));
?>

<h2>Получение одного значения - array_reduce</h2>
<?php
function sum($summ, $a)
{
    return $summ + $a;
}
echo array_reduce($nums, 'sum');
?>

<h2>Пользовательская сортировка - usort()</h2>
<?php
$strings = ['one', 'two', 'three', 'four'];
function compare($a, $b)
{
    $la = strlen($a);
    $lb = strlen($b);
    if($la == $lb) return 1;
    elseif($la == $lb) return 0;
    else return -1;
}
usort($strings, 'compare');
var_dump($strings);
echo '<p>Обычная сортировка строк</p>';
sort($strings);
var_dump($strings);
?>

<h2>Применение функции к каждому элементу массива - array_walk()</h2>
<?php
$nums = [2, -43, 5, -77, 8];
function square($a, $i)
{
    $a **= 2;
}
array_walk($nums, 'square');
var_dump($nums);
?>
