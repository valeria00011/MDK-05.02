<h1>Практическая 4</h1>
<h3>Исходный массив: [3, 11, 34, 22, 12, 4]</h3>
<h2>Задание 1</h2>
<?php
$nums = [3, 11, 34, 22, 12, 4];
$max = $nums[0];
$min = $nums[0];
foreach ($nums as $num){
    if($num > $max)
        $max = $num;
    if($num < $min)
        $min = $num;
}

echo "Максимум = $max <br>";
echo "Минимум = $min";
?>

<h2>Задание 2</h2>
<?php
$nums1 = [3, 11, 34, 22, 12, 4];
$sum = 0;
$mul = 1;
for ($i = 0; $i < count($nums1); $i++){
    $sum += $nums1[$i];
    $mul *= $nums1[$i];
}
echo "Сумма: $sum<br>";
echo "Произведение: $mul";
?>

<h2>Задание 3</h2>
<?php
$nums2 = [3, 11, 34, 22, 12, 4];
$sum = 0;
for ($i = 0; $i < count($nums2); $i++){
    $sum += $nums2[$i];
}
echo "Среднее арифметическое: " . ($sum / count($nums2));
?>

<h2>Задание 4</h2>
<?php
$nums3 = [3, 11, 34, 22, 12, 4];
$b = [];
for ($i = 0; $i < count($nums2); $i++){
    if ($nums3[$i] > 0) {
    $b[$i] = $nums3[$i] * $nums3[$i];
    } else {
        $b[$i] = ($nums3[$i]) * -1;
    }
}
echo "исходный массив: ";
for($i = 0; $i < count($nums3); $i++){
    echo $nums3[$i], ' ';
}
echo "<br>";
echo "получившийся массив: ";
for($i = 0; $i < count($b); $i++){
    echo $b[$i], ' ';
}
?>

<h2>Задание 5</h2>
<?php
echo "Четные индексы: ";
$nums4 = [3, 11, 34, 22, 12, 4];
for($i = 0; $i < count($nums4); $i++){
    if ($i % 2 == 0){
        echo $nums4[$i] . ' ';
    }
}
?>

<h2>Задание 6</h2>
<?php
echo "Больше предыдущего элемента: ";
$nums5 = [3, 11, 34, 22, 12, 4];
for($i = 1; $i < count($nums5); $i++){
    if ($nums5[$i] > $nums5[$i -1 ]){
        echo $nums5[$i] . " ";
    }
}
?>

<h2>Задание 7</h2>
<?php
echo "получившийся массив: ";
$nums6 = [3, 11, 34, 22, 12, 4];
for($i = 0; $i < count($nums6) - 1; $i++){
    $b = $nums6[$i];
    $nums6[$i] = $nums6[$i + 1];
    $nums[$i + 1] = $b;
}
for($i = 0; $i < count($nums6); $i++){
    echo $nums6[$i], ' ';
}
?>

<h2>Задание 8</h2>
<?php
echo "получившийся массив: ";
$nums7 = [3, 11, 34, 22, 12, 4];
$last = $nums7[count($nums7) - 1];
for ($i = count($nums7) - 1; $i > 0; $i--){
    $nums7[$i] = $nums7[$i - 1];
}
$nums7[0] = $last;
for($i = 0; $i < count($nums7); $i++){
    echo $nums7[$i], ' ';
}
?>
