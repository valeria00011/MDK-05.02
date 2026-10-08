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
switch($n){
    case 0:
        echo "zero";
        break;
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    case 4:
        echo "four";
        break;
    case 5:
        echo "five";
        break;
    case 6:
        echo "six";
        break;
    case 7:
        echo "seven";
        break;
    case 8:
        echo "eight";
        break;
    case 9:
        echo "nine";
        break;  
    default:
        echo "ЦИфра больше 9";
}
}
?>

<h2>Задание 2</h2>
<form>
    <p>Введите номер месяца: </p>
    <input name="num2">
    <input type="submit">    
</form>

<?php
if(isset($_GET['num2'])){
    $n = $_GET['num2'];
}
echo "<br>Праздник(и): ";
switch($n){
    case 1:
        echo "1 января - Новый год, 7 января - Рождество";
        break;
    case 2:
        echo "14 февраля - День Святого Валентина, 23 февраля - День Защитника Отечества";
        break;
    case 3:
        echo "8 марта - Международный женский день";
        break;
    case 4:
        echo "12 апреля - День космонавтики, 22 апреля - день рождения Яны";
        break;
    case 5:
        echo "1 мая - Праздник Весны и Труда, 9 мая - День Победы";
        break;
    case 6:
        echo "1 июня - Международный день защиты детей, 12 июня - День России";
        break;
    case 7:
        echo "Не знаю";
        break;
    case 8:
        echo "22 августа - День государственного флага";
        break;
    case 9:
        echo "1 сентября - День знаний";
        break;  
    case 10:
        echo "5 октября - День учителя";
        break;
    case 11:
        echo "4 ноября - День народного единства";
        break;
    case 12:
        echo "6 декабря - мой день рождения, 12 декабря - День конституции";
        break; 
    default:
        echo "нет столько месяцев!!!";

}
?>

<h2>Задание 3</h2>
<form>
    <p>Введите номер месяца: </p>
    <input name="number">
    <input type="submit">    
</form>

<?php
if(isset($_GET['number'])){
    $n = $_GET['number'];
}
$n = 147;
echo "<br>Последняя цифра квадрата: ";
$last = $n % 10;
switch($last){
    case 0:
        echo "0";
        break;
    case 1:
        echo "1";
        break;
    case 2:
        echo "4";
        break;
    case 3:
        echo "9";
        break;
    case 4:
        echo "6";
        break;
    case 5:
        echo "5";
        break;
    case 6:
        echo "6";
        break;
    case 7:
        echo "9";
        break;
    case 8:
        echo "4";
        break;
    case 9:
        echo "1";
        break;
}
?>

<h2>Задание 4</h2>
<?php
$n = 41;
$last = $n % 10;
echo "Мне " . $n;
switch($last){
    case 0:
        echo " лет";
        break;
    case 1:
        echo " год";
        break;
    case 2:
        echo " года";
        break;
    case 3:
        echo " года";
        break;
    case 4:
        echo " года";
        break;
    case 5:
        echo " лет";
        break;
    case 6:
        echo " лет";
        break;
    case 7:
        echo " лет";
        break;
    case 8:
        echo " лет";
        break;
    case 9:
        echo " лет";
        break;
}
?>

<h2>Задание 5</h2>
<form>
    <p>Введите число: </p>
    <input name="number">
    <p>Введите массу: </p>
    <input name="massa">
    <input type="submit">    
</form>

<?php
if(isset($_GET['number'])) 
    if(isset($_GET['massa'])) {
    $n = $_GET['number'];
    $m = $_GET['massa'];
    }
echo "Масса=";

switch($n){
    case 1:
        echo " $m килограмм";
        break;
    case 2:
        $kg = $m / 1000000; 
        echo "$kg килограмм" ;
        break;
    case 3:
        $kg = $m / 1000;
        echo "$kg килограмм";
        break;
    case 4:
        $kg = $m / 1000;
        echo "$kg килограмм";
        break;
    case 5:
        $kg = $m / 10;
        echo "$kg килограмм";
        break;
}
?>