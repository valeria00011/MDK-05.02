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
$str6 = "cat programming hello";
$arr1 = explode(" ", $str6);
$min = strlen($arr1[0]);
$max = strlen($arr1[0]);
foreach($arr as $word){
    if (strlen($word) < $min){
        $min = strlen($word);
    }
    if (strlen($word) > $max){
        $max = strlen($word);
    }
}
echo "Самое длинное слово - $max символов" . "<br>";
echo "Самое длинное слово - $min символов";
?>

<h2>Задание 7</h2>
<?php
$str7 = "aaaaaaaahelloaaaalaa";
preg_match_all('/a+/u', $str7, $arr2);
$max = 0;
foreach ($arr2[0] as $word){
    if (strlen($word) > $max){
        $max = strlen($word);
    }
}
echo "Максимальное количество а - $max";
?>

<h2>Задание 8</h2>
<?php
$str8 = "Hello (bebbeb) world";
$a = strpos($str8, "(");
$b = strpos($str8, ")");
$str88 = substr_replace($str8, "", $a, $b - $a +1);
echo $str88;
?>
