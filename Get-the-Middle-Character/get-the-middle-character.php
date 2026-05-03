<?php

function getMiddle(string $text): string
{
    $length = strlen($text);
    $index1 = (int)floor($length / 2);
    $index2 = $index1 - 1;
    if ($length % 2 === 0) {
        $result = $text[$index2] . $text[$index1];
    } else {
        $result = $text[$index1];
    }
    return $result;
}

var_dump(getMiddle("middle"));
