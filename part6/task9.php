<?php

/**
 * Дана строка 'html css php'.
 * Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
 */
$str = 'html css php';
$newStr = substr($str, 0, 4);
echo $newStr;

$arr = explode(' ', $str);
for ($i = 0; $i < count($arr); $i++) {
    echo nl2br("\n $arr[$i]");
}