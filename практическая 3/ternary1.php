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
$res = $a < $b ? 'a меньше b, сумма = ' . $a + $b : 'a больше или равно b, произведение = ' . $a * $b;
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
$res2 = $n % 2 == 0 ? 'число ' . $n . ' четное' : 'число ' . $n . ' нечетное';
echo $res2;
    }
?>
<h2>Задание 3</h2>
<form>
    <p>Введите числo: </p>
    <input name="numberere">
    <input type="submit">    
</form>

<?php
if(isset($_GET['numberere'])){
    $w = $_GET['numberere'];
$sum10 = $w >= 1000 ? 'Скидка  10%, итоговая сумма = ' . $sum - ( $sum * 10 ) / 100 : 'Скидка  5%, итоговая сумма = ' . $sum - ($sum * 5) / 100;
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
$ress = ($q + $w > $e && $w + $e > $q && $e + $q > $w) ? "Треугольник существует" : "Такого треугольника не существует";
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
$age1 = ($age <= 1) ? 'Котята' : (($age <= 3) ? 'Молодые коты' : (($age <= 7) ? 'Коты средних лет' : 'Почтенные коты'));
echo $age1;
    };
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
$res6 = ( $x > 0 && $y > 0 && $x + $y < 180) ? (( $x == 90 || $y == 90 || $x + $y == 90) ?  'Такой треугольник существует, прямоугольный' : 'Треугольник существует, не прямоугольный' ) : 'Треугольника не существует';
    }
}
?>