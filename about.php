<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Урок №1</title>
    <body>

<?php
error_reporting (E_ALL);
echo '<h1>';
echo 'About my self';
echo '</h1>';
$name ='Victor';
$age = '24';
$email = 'Nazarov.victor92@yandex.ru';
$about = 'engeneer' ;
echo "<br>" .'Имя:',' ',$name,PHP_EOL . "</br>";
echo 'Возраст:'   , ' ',  $age,PHP_EOL ;
echo "<br>". 'Адрес электронноый почты:', $email ,PHP_EOL ."</br>";
echo 'О себе: ', ' ', $about;
?>
</body>
</head>
</html>

