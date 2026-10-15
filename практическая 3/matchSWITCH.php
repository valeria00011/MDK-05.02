<h1>Операторы выбора практическая</h1>
<h2>Задание 1</h2>
<form>
    <p>Введите число: </p>
    <input name="num">
    <input type="submit">    
</form>
<?php
if(isset($_GET['num'])){
    $n = $_GET['num'];
$n1 = match (true){
    $n == 0 => 'zero',
    $n == 1 => 'one',
    $n == 2 => 'two',
    $n == 3 => 'three',
    $n == 4 => 'four',
    $n == 5 => 'five',
    $n == 6 => 'six',
    $n == 7 => 'seven',
    $n == 8 => 'eight',
    $n == 9 => 'nine',
    default => 'много',
};

echo $n1;
  }  
?>

<h2>Задание 2</h2>
<form>
    <p>Введите номер месяца: </p>
    <input name="numb">
    <input type="submit">    
</form>

<?php
if(isset($_GET['numb'])){
    $a = $_GET['numb'];

echo "<br>Праздник(и): ";
$a1 = match (true){
$a == 1 => "1 января - Новый год, 7 января - Рождество",
$a == 2 => "14 февраля - День Святого Валентина, 23 февраля - День Защитника Отечества",
$a == 3 => "8 марта - Международный женский день",
$a == 4 => "12 апреля - День космонавтики, 22 апреля - день рождения Яны",
$a == 5 => "1 мая - Праздник Весны и Труда, 9 мая - День Победы",
$a == 6 => "1 июня - Международный день защиты детей, 12 июня - День России",
$a == 7 => "Не знаю",
$a == 8 => "22 августа - День государственного флага",
$a == 9 => "1 сентября - День знаний",
$a == 10 => "5 октября - День учителя",
$a == 11 => "4 ноября - День народного единства",
$a == 12 => "6 декабря - мой день рождения, 12 декабря - День конституции",
default => "нет столько месяцев",
};
echo $a1;
}
?>

<h2>Задание 3</h2>
<form>
    <p>Введите число: </p>
    <input name="number3">
    <input type="submit">    
</form>

<?php
if(isset($_GET['number3'])){
    $b = $_GET['number3'];

echo "<br>Последняя цифра квадрата: ";
$last = $b % 10;
$last1 = match (true){
    $last == 0 => "0",
    $last == 1 => "1",
    $last == 2 => "4",
    $last == 3 => "9",
    $last == 4 => "6",
    $last == 5 => "5",
    $last == 6 => "6",
    $last == 7 => "9",
    $last == 8 => "4",
    $last == 9 => "1",
};
echo $last1;
}
?>

<h2>Задание 4</h2>
<form>
    <p>Введите возраст: </p>
    <input name="number4">
    <input type="submit">    
</form>

<?php
if(isset($_GET['number4'])){
    $c = $_GET['number4'];

$lastY = $c % 10;
echo "Мне " . $c;
$lastY1 = match (true){
$lastY == 1 => " лет",
$lastY == 2 => " года",
$lastY == 3 => " года",
$lastY == 4 => " года",
$lastY == 5 => " лет",
$lastY == 6 => " лет",
$lastY == 7 => " лет",
$lastY == 8 => " лет",
$lastY == 9 => " лет",
};
echo $lastY1;
}
?>

<h2>Задание 5</h2>
<form>
    <p>Введите число: </p>
    <input name="number5">
    <p>Введите массу: </p>
    <input name="massa5">
    <input type="submit">    
</form>

<?php
if(isset($_GET['number5'])) {
    $d = $_GET['number5'];

if(isset($_GET['massa5'])) {
    $m = $_GET['massa5'];

echo "Масса= ";

switch($d){
}
}
}