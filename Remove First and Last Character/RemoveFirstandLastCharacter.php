<?php

/*Your goal is to write a function that removes the first and last characters of a string. You're given one parameter, the original string.

Important: Your function should handle strings of any length ≥ 2 characters. For strings with exactly 2 characters, return an empty string.*/

function remove_char(string $s): string
{
    return substr($s, 1, -1);
}

$string = "eloquent";

var_dump(remove_char($string));

/*
1) Совсем забыл как обрабатывать строки.
2) Использовал свойства substr обрабатывать последний символ без вычисления длины строки.
3) Есть варианты с разделением строки на массив, его преобразование и склеивание.
*/