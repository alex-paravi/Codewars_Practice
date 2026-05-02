<?php

function highAndLow(string $numbers): string
{
    preg_match_all('/-?\d+/', $numbers, $matches);
    $array = array_map('intval', $matches[0]);
    $min = min($array);
    $max = max($array);
    $result = "{$max} {$min}";
    return $result;
}

var_dump(highAndLow(("-1 2 3 4 5")));
