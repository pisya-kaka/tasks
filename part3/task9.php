<?php
/*
 * Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'.
 * Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.
 */
$a = '0';
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";
$a = '';
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";
$a = null;
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";
$a = "true";
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";
$a = 0;
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";;
$a = -3;
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";
$a = 3;
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";
$a = 1;
if (isset($a)) {
    echo " Верно";
} else{
    echo "Неверно";
}
echo "<hr/>";