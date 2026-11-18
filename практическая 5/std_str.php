<h1>Практическая по функциям строк</h1>
<h2>Задание 1</h2>
<?php
$str = 'Hello, world(helloo)';
$start = strpos($str, '(');
$end = strpos($str, ")");
echo "В скобках : " . substr($str, $start + 1, $end - $start - 1);
?>

<h2>Задание 2</h2>
<?php
$str2 = "Dog gav gav gav.";
$words = explode(" ", $str2);
echo "В строчке '$str2' слов: " . count($words);
?>

<h2>Задание 3</h2>
<?php
$str3 = "ананас топот радар кот";
$arr = explode(" ", $str3);
echo "Слова с одинаковыми началом и концом из строчки '$str3' : ";
foreach($arr as $word){
    if (mb_substr($word, 0, 1) == mb_substr($word, -1)){
        echo $word . " ";
    }
}
?>

<h2>Задание 4</h2>
<?php
$str4 = "hello";
$arrr = str_split($str4);
$arrr = array_unique($arrr);
echo "В строчке '$str4' разных символов: " . count($arrr);
?>

<h2>Задание 5</h2>
<?php
$str5 = "programming keybord text";
echo $str5 . "<br>";
echo "Букв r: " . substr_count($str5, "r") . "<br>";
echo "Букв k: " . substr_count($str5, "k") . "<br>";
echo "Букв t: " . substr_count($str5, "t") . "<br>";
?>

<h2>Задание 6</h2>
<?php

?>