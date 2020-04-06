<?php

/*
 *  Составьте массив дней недели.
 *  С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным.
 */
 $arr = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];
foreach ($arr as $elem) {

    if ($elem[0] === 'm' || $elem[0] === 't' || $elem[0] === 'w' || $elem[0] === 'f') {
        echo $elem . "<hr>";
    }else if ($elem[0] === 's' ){
        echo "<b>".$elem."</b><hr/>";
    }
}










