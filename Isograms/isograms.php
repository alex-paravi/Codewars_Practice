<?php

function isIsogram(string $string): bool
{
    $formattedString = strtolower($string);
    $array = str_split($formattedString);
    $uniqueArray = array_unique($array);
    return count($array) === count($uniqueArray);
}

var_dump(isIsogram("moOse"));
