<h1>Практическая по циклам</h1>

<h2>Задание 1</h2>
<?php
$startNum = 2;
$multiplier = 3;
$quantity = 5;
$num = $startNum;
for($i = 0; $i < $quantity; $i++){
    echo $num . "<br>";
    $num *= $multiplier;
}
?>

<h2>Задание 2</h2>
<?php
$lastNum = 10;
$sum = 0;
for($i = 1; $i <= $lastNum; $i++){
    $sum += $i;
} echo $sum;
?>

<h2>Задание 3</h2>
<?php
$lastNum = 10;
$multRes = 1;
for ($i = 2; $i <= $lastNum; $i += 2){
    $multRes *= $i;
}
    echo $multRes;
?>

<h2>Задание 4</h2>
<?php
$distance = 10;
$sum = 0;
for($day = 1; $day <= 7; $day++){
    $sum += $distance;
    $distance *= 1.1;
}
echo $sum;
?>

<h2>Задание 5</h2>
<?php
for($rabbits = 0; $rabbits <= 31; $rabbits++){
    $geese = 32 - $rabbits;
    echo "Кроликов: " . $rabbits . ", гусей: " . $geese . "<br>";
}
?>
