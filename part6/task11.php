<?php
/**
 *
Дана строка. Проверьте, что она начинается на 'http://'.
Если это так, выведите 'да', если не так - 'нет'.
 *
 */

$poos = 'http://';
if ((substr($poos, 0, 7)) == 'http://'){
    echo 'yes!';
} else {
    echo 'no!';
}
