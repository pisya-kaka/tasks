<?php

/*
 *  Дан массив с элементами 1, 2, 3, 4, 5.
 *  С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 *  Результат запишите переменную $result.
 */
    $arr = [1, 2, 3, 4, 5];
    $result = 0;
    foreach ($arr as $elem) {
    $result = $result + $elem * $elem;
}
    echo $result;


    


