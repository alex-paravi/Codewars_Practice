<?php

function maskify(string $string): string
{
    $length = strlen($string);
    if ($length <= 4) {
        return $string;
    }
    $unmaskedChar = substr($string, -4);
    $maskedChar = str_repeat("#", $length - 4);
    return $maskedChar . $unmaskedChar;
}
echo maskify('s');
