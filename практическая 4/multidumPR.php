<h1>Практическая работа по многомерным массивам</h1>

<h2>Задание 1</h2>
<?php
$nums = [[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]];
echo "<table border='1'>";
foreach($nums as $row){
    echo "<tr>";
    foreach($row as $num){
        echo "<td>$num</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>Задание 2</h2>
<?php
$numbers = [];
$number = 10;
for($i = 0; $i < 9; $i++){
    for($j = 0; $j < 10; $j++){
        $numbers[$i][$j] = $number * $number;
        $number++;
    }
}
echo "<table border='1'>";
foreach ($numbers as $row){
    echo "<tr>";
    foreach($row as $number){
        echo "<td>$number</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>Задание 3</h2>
<?php
$nums3 = [[12, 5, 8, 21], [31, 3, 5, 17], [12, 51, 45, 1], [43, 4, 16, 9], [10, 14, 23, 7]];
$min = $nums3[0][0];
$max = $nums3[0][0];
$minRow = 0;
$minCol = 0;
$maxRow = 0;
$maxCol = 0;
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 4; $j++){
        if ($nums3[$i][$j] < $min){
            $min = $nums3[$i][$j];
            $minRow = $i;
            $minCol = $j;
        }
        if($nums3[$i][$j] > $max){
            $max = $nums3[$i][$j];
            $maxRow = $i;
            $maxCol = $j;
        }
    }
}
echo "Минимальный элемент: $min<br>";
echo "Индексы минимума $minRow, столбец $minCol<br>";
echo "Максимальный элемент: $max<br>";
echo "Индексы максимума $maxRow, столбец $maxCol<br>";
?>