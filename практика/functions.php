<h1>Функции</h1>
<?php
function sayHello($name)
{
    echo "<p>Привет, $name!</p>";
}
sayHello('Вася');
sayHello('Яна');
sayHello('Вольдемар');
?>
<h2>Функции с несколькими параметрами</h2>
<?php
function fullName($fname, $lName)
{
    echo "$fname $lName";
}
fullName('Вася', 'Иванов');
?>

<h2>Функции с несколькими параметрами по умолчанию</h2>
<?php
function showUserInfo($fname, $lName, $role = 'user')
{
echo "<p>$fname $lName, роль - $role</p> ";
}
showUserInfo('Коля', 'Петров', 'student');
showUserInfo('Ваня', 'Петров');
?>

<h2>Возвращаемое значение</h2>
<?php
function getUserInfo($fname, $lName, $role = 'user')
{
    return "$fname $lName, роль - $role";
}
$info = getUserInfo('Иван', 'Иванов');
echo $info;
echo "<br>";
echo getUserInfo('Иван', 'Иванов');
echo "<br>";
function squareRest($l, $w)
{
    return $l * $w;
}

$s = squareRest(20, 40);
echo 'Площадь - ' . $s . "<br>";

echo 'Площадь - ' . squareRest(20, 40);
?>