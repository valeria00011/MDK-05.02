<h1>Практическая по функциям массивов</h1>
<?php
$arr = [5, 7, 8, 0, 3, 1, 9];

echo "<h2>Задание 1</h2>";
$arr1 = array_search(0, $arr);
$res1 = array_slice($arr, 0, $arr1 + 1);
print_r($res1);

echo "<h2>Задание 2</h2>";
echo array_product($arr);

echo "<h2>Задание 3</h2>";
$minVal = min($arr);
$maxVal = max($arr);
$minKey = array_search($minVal, $arr);
$maxKey = array_search($maxVal, $arr);
$arrr = $arr;
$arrr[$minKey] = $maxVal;
$arrr[$maxKey] = $minVal;
print_r($arrr);

echo "<h2>Задание 4</h2>";
?>