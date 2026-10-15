<h1>Тернарный оператор практическая</h1>

<h2>Задание 1</h2>
<form>
    <p>Введите числo 1: </p>
    <input name="num1">
    <p>Введите числo 2: </p>
    <input name="num2">
    <input type="submit">    
</form>

<?php
if(isset($_GET['num1'])){
    if(isset($_GET['num2'])){
        $a = $_GET['num1'];
        $b = $_GET['num2'];
$res = match ($a < $b){
   true => 'a меньше b, сумма = ' . $a + $b,
   false => 'a больше или равно b, произведение = ' . $a * $b,
};
echo $res;
    }
}
?>

<h2>Задание 2</h2>
<form>
    <p>Введите числo: </p>
    <input name="numb">
    <input type="submit">    
</form>

<?php
if(isset($_GET['numb'])){
    $n = $_GET['numb'];
$res2 = match ($n % 2){
    0 => 'число ' . $n . ' четное',
    default => 'число ' . $n . ' нечетное',
};
echo $res2;
} 
?>

<h2>Задание 3</h2>
<form>
    <p>Введите числo: </p>
    <input name="numberer">
    <input type="submit">    
</form>

<?php
if(isset($_GET['numberer'])){
    $i = $_GET['numberer'];
$sum10 = match ($i >= 1000){
    true =>'Скидка  10%, итоговая сумма = ' . $i - ( $i * 10 ) / 100,
    false => 'Скидка  5%, итоговая сумма = ' . $i - ($i * 5) / 100,
};
echo $sum10;
}
?>

<h2>Задание 4</h2>
<form>
    <p>Введите сторону 1: </p>
    <input name="numberr">
        <p>Введите сторону 2: </p>
    <input name="numberr2">
        <p>Введите сторону 3: </p>
    <input name="numberr3">
    <input type="submit">    
</form>

<?php
if(isset($_GET['numberr'])){
    $q = $_GET['numberr'];
    if(isset($_GET['numberr2'])){
    $w = $_GET['numberr2'];
    if(isset($_GET['numberr3'])){
    $e = $_GET['numberr3'];
$ress = match ($q + $w > $e && $w + $e > $q && $e + $q > $w){
    true => "Треугольник с данными " . $q . "," . $w . "," . $e . " существует ",
    false => "Треугольникa с данными " . $q . "," . $w . "," . $e . " не существует ",
};
echo $ress;
    }
    }
}
?>

<h2>Задание 5</h2>
<form>
    <p>Введите возраст кота: </p>
    <input name="numbe">
    <input type="submit">    
</form>

<?php
if(isset($_GET['numbe'])){
    $age = $_GET['numbe'];
$age1 = match (true){
    $age <= 1 => 'Котята',
    $age > 1 && $age <= 3 => 'Молодые  коты',
    $age > 3 && $age <= 7 => 'Коты почтенного возраста',
    $age > 7 => 'Почтенные коты',
    default => 'Неизвестный возраст',
};
    
    echo $age1;
    }
?>

<h2>Задание 6</h2>
<form>
    <p>Введите первый угол: </p>
    <input name="numbebe">
    <p>Введите второй угол: </p>
    <input name="numbeber">
    <input type="submit">    
</form>

<?php
if(isset($_GET['numbebe'])){
    $y = $_GET['numbebe'];
    if(isset($_GET['numbeber'])){
    $x = $_GET['numbeber'];

$sum3 = $x + $y;
$res6 = match (true){
    $sum >= 180 => 'Такой треугольник существует, прямоугольный',
    $x == 90 || $y == 90 || (180 - $sum) == 90 => 'Треугольник существует, не прямоугольный',
    default => 'Треугольника не существует',
    };
echo $res6;
    }
}
?>
