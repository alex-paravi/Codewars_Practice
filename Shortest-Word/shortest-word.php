<?php

function findShort(string $string): int
{
    $words = explode(" ", $string);
    $length = array_map('strlen', $words);
    return min($length);
}

var_dump(findShort("Let's travel abroad shall we we"));
