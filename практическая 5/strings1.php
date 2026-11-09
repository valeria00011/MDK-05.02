<h1>Практическая по строкам</h1>
<h2>Задание 1</h2>
<?php
$str1 = "Hello (my word) everyone";
$start = 0;
$end = 0;
for ($i = 0; $i < strlen($str1); $i++){
    if($str1[$i] == "("){
        $start = $i;
    }
    if ($str1[$i] == ")"){
        $end = $i;
    }
}
echo "Внутри скобок строки '$str1' слова - ";
for ($i = $start + 1; $i < $end; $i++){
    echo $str1[$i];
}
?>

<h2>Задание 2</h2>
<?php
$str2 = "I love my bff Yana.";
$count = 0;
for ($i = 0; $i < strlen($str2); $i++){
    if ($str2[$i] != " " && ($i == 0 || $str2[$i - 1] == " ")){
        $count++;
    }
}
echo "В строкe '$str2' - $count слов";
?>

<h2>Задание 3</h2>
<?php
$str3 = "apple radar hello level enter";
$start = 0;
echo "Слова, начинающиеся и оканчивающиеся на одну букву в строке '$str3' - ";
for ($i = 0; $i < strlen($str3); $i++){
    if ($str3[$i] == " "){
        $end = $i - 1;
        if ($str3[$start] == $str3[$end]){
            for ($j = $start; $j <= $end; $j++){

                echo $str3[$j];
            }
            echo " ";
        }
        $start = $i + 1;
    }
} 
?>

<h2>Задание 4</h2>
<?php
$str4 = "hello word";
$count = 0; 
for ($i = 0; $i < strlen($str4); $i++){
    $found = false;
    for($j = 0; $j < $i; $j++){
        if ($str4[$i] == $str4[$j]){
            $found = true;
        }
    }
    if ($found == false){
        echo $str4[$i] . " ";
        $count++;
    }
}
echo "Количество разных символов: $count";
?>

<h2>Задание 5</h2>
<?php
$str5 = "bookkeeper and kitten";
$count = 0;
for ($i = 0; $i < strlen($str5); $i++){
    if ($str5[$i] == "r" || $str5[$i] == "k" || $str5[$i] == "t"){
        $count++;
    }
}
echo "Букв r k t в строке '$str5' - $count";
?>

<h2>Задание 6</h2>
<?php
$str6 = "     Hello  my  friend   ";
$result = "";
$space = false;
for ($i = 0; $i < strlen($str6); $i++){
    if ($str6[$i] != " "){
        $result .= $str6[$i];
        $space = false;
    } else {
        if ($result != "" && $space == false){
            $result .= " ";
            $space = true;
        }
    }
}
if ($result[strlen($result) - 1] == " "){
    $result = $result;
}
echo "Исправленный вариант строки '$str6' - '$result'";
?>
