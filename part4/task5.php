<?php

/*
 *  Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'.
 *  С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов
 */
    $arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
    foreach ($arr as $key=> $elem) {
        echo $key." - зарплата ".$elem." долларов"."<br>";
}



    


