<!DOCTYPE html>
<html lang=”ru”>
<head>
<meta http-equiv=”X-UA-Compatible” content=”IE=edge” />
<meta http-equiv=”content-type” content=”text/html; charset=utf-8” />
<title>Создание PHP-скриптов</title>
</head>
<body>
<?php

// 1 способ
$name = [];
$name[0] = "Сашка";
$name[1] = "Машка";
$name[2] = "Пашка";
$name[3] = "Дашка";
$name[4] = "Лашка";
echo $name[2]. '<br />';


//2 способ
$names = [];
$names[] = 'Саша';
$names[] = 'Маша';
$names[] = 'Ваня';
$names[] = 'Аня';
$names[] = 'Костя';
echo $names[3]. '<br />'; 


// 3 способ
$namez = [
    0 => 'Саша',
    1 => 'Маша',
    2 => 'Ваня',
    3 =>  'Аня',
    4 => 'Костя'
];
echo $namez[2]. '<br />';

// 4 способ
$name = [
    'Саша',
    'Маша',
    'Ваня',
    'Аня',
    'Костя'
];
echo $name[1]. '<br />';
?>
</body>
</html>