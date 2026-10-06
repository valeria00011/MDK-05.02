<h1>Практическая работа по вложенным циклам</h1>
<h2>Задание 1</h2>
<?php
for ($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= 10; $j++) {
        echo $i * $j . " ";
    }
    echo "<br>";
}
?>

<h2>Задание 2</h2>
<?php
$a = 4;
$b = 3;
for ($i = 0; $i < $b; $i++) {
    for ($j = 0; $j < $a; $j++) {
        echo "X";
    }
    echo "<br>";
}
?>

<h2>Задание 3</h2>
<?php
echo "<table border'1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td style='width: 50px; height: 30px; text-align: center;'>";
        echo $i * $j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

<h2>Задание 4</h2>
<?php
echo "<table border'1'>";
for ($i = 10; $i <= 99; $i++) {
    echo "<tr>";
        echo "<td style='width: 50px; height: 30px; text-align: center;'>$i</td>";
        echo "<td style='width: 70px; height: 30px; text-align: center;'>" . ($i * $i) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

<h2>Задание 5</h2>
<?php
$a = 4;
$b = 4;
for ($i = 0 ; $i < $b; $i++){
    for ($j = 0; $j < $a; $j++){
        if ($i == 0 || $i == $b - 1 || $j == 0 || $j == $a - 1){
            echo "#";
        } else {
            echo "X";
        }

    }
    echo "<br>";
}
?>

