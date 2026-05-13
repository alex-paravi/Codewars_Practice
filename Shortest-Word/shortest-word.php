<?php

function findShort(string $string)
{
    $words = explode(" ", $string);
    $length = array_map('strlen', $words);
    $minLength = min($length);
    $result = array_filter($words, function ($words) use ($minLength) {
        return strlen($words) === $minLength;
    });
    return implode(" ", array_values($result));
}

var_dump(findShort("Let's travel abroad shall we we"));
