<?php
/*
 *  Заполните массив 10-ю случайными числами.
 *  Подсказка: нужно воспользоваться циклами for или while.
 */
    $arr = [];
    for ($i = 1; $i <= 10; $i++){
    $arr[] = mt_rand(1, 100);
}
    var_dump($arr);