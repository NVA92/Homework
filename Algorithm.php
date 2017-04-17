<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Урок №2r</title>
<body>
<?php
$u = rand(0, 100);
echo $u, ' ' . '<br/>' ;

$one = 1;
$two = 1;
$three = 0;
while (true) {
    if ($one > $u) {
        echo "Задуманное число не входит в числовой ряд";
        break;
    } else if ($one === $u) {
        echo "Задуманное число входит в числовой ряд";
        break;
    } else {
        $three = $one;
        $one = $one + $two;
        $two = $three;
    }
}
?>
</body>
</head>
</html>
