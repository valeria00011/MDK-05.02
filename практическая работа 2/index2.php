<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Практическая 2</h1>
    <p>Формула 1: (a/c) * (b/d) - ( (a*b - c) /c*d ) <br>a=9<br>b=3<br>c=8<br>d=2</p>
        <?php
        $a = 9;
        $b = 3;
        $c = 8;
        $d = 2;
        $res =  ($a/$c) * ($b/$d) - ( ($a*$b - $c) /$c*$d );
        echo "Результат: $res";
    ?>

    <p>Формула 2: (x + y) / (y + 1) - ((x * y - 12) / (34 + x)) <br>x = 4<br>y = 8</p>
    <?php
    $x = 4;
    $y = 8;
    $res = ($x + $y) / ($y + 1) - (($x * $y - 12) / (34 + $x));
      echo "Результат: $res";
    ?>

    <p>Формула 3: (((x + 1) / (x - 1)) **x ) + 18 * x * y**2 <br>x = 2<br>y = 3</p>
    <?php
    $x = 2;
    $y = 3;
    $res = ((($x + 1) / ($x - 1)) **$x ) + 18 * $x * $y**2;
      echo "Результат: $res";
    ?>

        <p>Формула 4: (1 + (1 / x**2))**x - 12 * x**2 * y <br>x = 2<br>y = 3</p>
    <?php
    $x = 2;
    $y = 3;
    $res = (1 + (1 / $x**2))**$x - 12 * $x**2 * $y;
      echo "Результат: $res";
    ?>
</body>
</html>