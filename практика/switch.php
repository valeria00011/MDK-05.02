<h1>Оператор выбора - switch</h1>
<form>
    <p>Введите число: </p>
    <input name="number">
    <input type="submit">    
</form>

<?php
if(isset($_GET['number'])){
    $n = $_GET['number'];
    switch($n){
    case 1:
        echo "n = 1";
        break;
    case 2:
        echo "n = 2";
        break;
    case 5:
        echo "n = 5";
        break;
    case 10:
        echo "n = 10";
        break;
    case 15:
        echo "n = 15";
        break;
    default:
        echo "Совпадений не найдено";
}
}else{
    echo "Данные не получены";
}
?>