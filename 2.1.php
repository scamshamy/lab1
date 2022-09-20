<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Создание PHP-скриптов</title>
</head>
<body>
<?php
/* 1 способ */
$name = [];
$name[0] = 'Саша';
$name[1] = 'Маша';
$name[2] = 'Ваня';
$name[3] = 'Аня';
$name[4] = 'Костя';
echo $name[3]. '<br />'; // Выведется Аня

/* 2 способ */
$name = [
    0 => 'Саша',
    1 => 'Маша',
    2 => 'Ваня',
    3 =>  'Аня',
    4 => 'Костя'
];
echo $name[3]. '<br />'; // Выведется Аня


/* 3 способ */
$name = [];
$name[] = 'Саша';
$name[] = 'Маша';
$name[] = 'Ваня';
$name[] = 'Аня';
$name[] = 'Костя';
echo $name[3]. '<br />'; // Выведется Аня

/* 4 способ */
$name = [
    'Саша',
    'Маша',
    'Ваня',
    'Аня',
    'Костя'
];
echo $name[3]. '<br />'; // Выведется Аня
?>
</body>
</html>