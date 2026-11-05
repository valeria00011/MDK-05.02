<h1>Практическая по функциям</h1>
<h2>Задание 1</h2>
<?php
function length($r)
{
    return 2 * $r * 3.14;
}
echo 'Длина окружности - ' . length(20);
?>

<h2>Задание 2</h2>
<?php

function STr($a, $b, $c)
{
    if ($a + $b <= $c || $b + $c <= $a || $a + $c <= $b){
        return 0;
    }
    $p = ($a + $b + $c) / 2;
    return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}
echo 'Площадь треугольника - ' . Str(3, 4, 5);
?>

<h2>Задание 3</h2>
<?php
function largDivisor($n)
{
    for ($i = $n - 1; $i >= 1; $i--){
        if ($n % $i == 0){
            return $i;
        }
    }
}
echo 'Наибольший делитель числа - ' . largDivisor(14);
?>

<h2>Задание 4</h2>
<?php
function allDivisors($m)
{
    for ($i = 1; $i <= $m; $i++){
        if ($m % $i == 0){
            echo $i . " ";
        }
    }
}
$m = 12;
echo 'Все делители числа: <br>';
allDivisors(12);
?>

<h2>Задание 5</h2>
<?php
function sumSquares($arr){
    $sum = 0;
    foreach ($arr as $num) {
        $sum += $num *$num;
    }
    return $sum;
}
echo 'Сумма квадратов данных чисел: ' . sumSquares([3, 4, 5]);
?>

<h2>Задание 6</h2>
<?php
function convertToString($arr)
{
    $str = "";
    foreach ($arr as $value){
        if (is_array($value)){
            $str .= convertToString($value);
        } else {
            $str .= $value . " ";
        }
    }
    return $str;
}
$array = [1, 2, [3, 4], 5];
echo convertToString($array);
?>

<h2>Задание 7</h2>
<?php
function totalLengt(...$strings)
{
    $sum = 0;
    foreach($strings as $str) {
        $sum += strlen($str);
    }
    return $sum;
}
echo "Сумма: " . totalLengt("Hello", "PHP", "World");
?>