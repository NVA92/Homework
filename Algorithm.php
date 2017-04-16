<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>header</title>
</head>
</html>

<?php
$u = rand(0, 100);
echo $u, ' ' . '<br/>' ;

$one = 1;
$two = 1;
$three = 0;

while (true) {
    if ($one > $u) {
        echo "Задуманное число не входит в числовой ряд";
        exit;
    } else if ($one === $u) {
        echo "Задуманное число входит в числовой ряд";
        exit;
    } else {
        $three = $one;
        $one = $one + $two;
        $two = $three;
    }
}

?>