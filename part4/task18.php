<?php

/*
 *  Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru.
 */


$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $lang) {
    if ($arr ==  'ru') {
        echo 'зеленый, красный, голубой';
    } else if ($arr == 'en') {
        echo 'green, red, blue';
    }
}











