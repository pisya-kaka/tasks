<?php
/*
 * Создайте двухмерный массив. Первые два ключа - это 'ru' и 'en'.
 *  Пусть первый ключ содержит элемент, являющийся массивом названий дней недели по-русски, а второй - по-английски.
 *  Выведите с помощью этого массива понедельник по-русски и среду по английски (пусть понедельник - это первый день).
 */
$arr = [
    'ru'=>["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"],
    'en'=>[ 1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 7=>'Sunday'],
];
echo $arr['ru'][0];
echo "<hr>";
echo $arr['en'][3];





