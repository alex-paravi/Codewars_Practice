<?php

function getCount(string $str): int
{
    $vowel = ['a', 'e', 'i', 'o', 'u'];
    $strArray = str_split($str);
    $conjunction = array_intersect($strArray, $vowel);
    $result = count($conjunction);
    return $result;
}

var_dump(getCount('aaaaa'));
