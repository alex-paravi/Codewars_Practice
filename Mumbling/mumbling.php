<?php

function accum(string $string): string
{
    $result = "";
    $length = strlen($string);
    $formattedString = strtolower($string);
    $block = [];
    for ($i = 0; $i < $length; $i++) {
        $block[] = ucfirst(str_repeat($formattedString[$i], $i + 1));
    }
    return (string) implode("-", $block);
}

var_dump(accum("abcd"));
