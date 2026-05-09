<?php

function XO(string $string): bool
{
    $formattedString = strtolower($string);
    $xCount = substr_count($formattedString, 'x');
    $oCount = substr_count($formattedString, 'o');
    return $xCount === $oCount;
}
var_dump(XO(""));
