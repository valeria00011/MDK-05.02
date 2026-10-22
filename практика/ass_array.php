<h1>Ассоциативные массивы</h1>
<h2>Создание массива</h2>
<?php
$nums = ['one' => 12, 'two' => 54, 'three' => 3, 'four' => 55, 'five' => 42];
?>
<h2>Вывод массива</h2>
<?php
foreach ($nums as $num){
    echo $num, ', ';
}
?>

<h2>Обращение к элементу массива</h2>
<?php
echo "Второй элемент - " . $nums['two'];
$nums['two'] = 555; //изменение элемента
?>
<h2>Создание элемента массива</h2>
<?php
$nums['six'] = 34;
$nums[] = 8;
$nums[5] = 77;
$nums[] = 22;
?>
<h2>Перебор ключами</h2>
<?php
foreach($nums as $key => $value){
    echo "$key - $value <br>";
}
?>

<h2>Строка</h2>
<?php
$str = 'qwerty';
echo $str[1], '<br>';
$len = strlen($str);
echo "Длина строки - $len символов"; 
?>