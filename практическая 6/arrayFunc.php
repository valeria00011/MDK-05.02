<h1>Практическая по функциям массивов</h1>
<?php
$arr = [5, 7, 8, 0, 3, 1, 9];
?>
<h2>Задание 1</h2>
<?php
$arr1 = array_search(0, $arr); // ищет элемент в массиве и возвращает ключ
$res1 = array_slice($arr, 0, $arr1 + 1); // массив, откуда, сколько
print_r($res1);
?>
<h2>Задание 2</h2>
<?php
echo array_product($arr); //перемножает все числа массива
?>
<h2>Задание 3</h2>
<?php
$minVal = min($arr);
$maxVal = max($arr);
$minKey = array_search($minVal, $arr); // ищет индексы
$maxKey = array_search($maxVal, $arr); 
$arrr = $arr;
$arrr[$minKey] = $maxVal;
$arrr[$maxKey] = $minVal;
print_r($arrr);
?>

<h2>Задание 4</h2>
<?php
$arr4 = [0, 5, 0, 3, 0];
$ind = array_keys($arr4, 0);
print_r($ind);
?>

<h2>Задание 5</h2>
<?php
$arr5 = [1, 0, 5, 0, 8];
$arr5_filtered = array_filter($arr5, function ($val) {
    return $val !== 0;
});
print_r($arr5_filtered);
?>

<h2>Задание 6</h2>
<?php
$arr6 = [5 => 'a', 1 => 'b', 8 => 'c'];
$reind = array_values($arr6);
print_r($reind);
?>

<h2>Задание 7</h2>
<?php
$arr7 = [1, 2, 3, 4, 5];
$oddCount = count(array_filter($arr7, fn($n) => $n % 2 != 0));
$percent = ($oddCount / count($arr7)) * 100;
echo $percent;
?>
