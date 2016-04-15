<?php


$name = 'Максим';
$age = 30;
$day = 4;

if ($age >=18 & $age <=59)
    echo 'Вам еще работать и работать';
elseif ($age > 59) {
    echo 'Вам пора на пенсию';
}
elseif ( $age >=0 & $age<=17){
    echo 'Вам еще рано работать';
}
else {
    echo 'Неизвестный возраст';
}

switch ($day){
    case 1: echo 'Это рабочий день'; break;
    case 2: echo 'Это рабочий день'; break;
    case 3: echo 'Это рабочий день'; break;
    case 4: echo 'Это рабочий день'; break;
    case 5: echo 'Это рабочий день'; break;
}
