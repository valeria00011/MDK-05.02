<h1>Ассоциативные массивы практическая</h1>
<h2>Задание 1</h2>
<?php
$nums = ["monday" => "понедельник",
        "tuesday" => "вторник",
        "wednesday" => "среда",
        "thursday" => "четверг",
        "friday" => "пятница",
        "saturday" => "суббота",
        "sunday" => "воскресенье",
        "one" => "один",
        "two" => "два",
        "three" => "три",
];
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
?>

<h2>Задание 2</h2>
<?php
$nums = ["monday" => "понедельник",
        "tuesday" => "вторник",
        "wednesday" => "среда",
        "thursday" => "четверг",
        "friday" => "пятница",
        "saturday" => "суббота",
        "sunday" => "воскресенье",
];
$word = "monday";
if (isset($nums[$word])){
    echo $word . " - " . $nums[$word];
} else {
    echo "В словаре нет такого слова";
}
?>

<h2>Задание 3</h2>
<?php
$nums = ["monday" => "понедельник",
        "tuesday" => "вторник",
        "wednesday" => "среда",
        "thursday" => "четверг",
        "friday" => "пятница",
        "saturday" => "суббота",
        "sunday" => "воскресенье",
];
$word = "понедельник";
$found = false;

foreach($nums as $key => $value){
    if ($word == $key){
        echo $value;
        $found = true;
    } elseif ($word == $value){
            echo $key;
            $found = true;
    }
}
if ($found == false){
    echo "В словаре нет такого слова";
}
?>

<h2>Задание 4</h2>

<form method="post">
    <p>Введите число: </p>
    <input type="text" name="word">
    <input type="submit">    
</form>
<?php
if (isset($_POST["word"])){
    $word = trim($_POST["word"]);

    if (isset($nums["word"])){
        echo $nums[$word];
    } elseif (array_search($word, $nums) !== false) {
        echo array_search($word, $nums);
    } else {
        echo "В словаре такого слова нет";
    }
}
?>

<h2>Задание 5</h2>
<?php
$str = "banana";
echo "$str <br>";
$nums = [];
for ($i = 0; $i < strlen($str); $i++){
    $letter = $str[$i];
    if (isset($nums[$letter])){
        $nums[$letter]++;
    } else {
        $nums[$letter] = 1;
    }
}
foreach ($nums as $key => $value){
    echo $key . " => " . $value . "<br>";
} 
?>

<h2>Задание 6</h2>