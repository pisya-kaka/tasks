<?php
/*
 *   Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'.
 * Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной.


 */

$var = true;
if ($var  != true) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr>";
$var = false;
if ($var  != true) {
    echo " Верно";
} else{
    echo "Неверно";
}