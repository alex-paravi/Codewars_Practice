<?php

function disemvowel(string $str): string
{
    $vovel = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $strArr = str_split($str);
    $filtredData = array_diff($strArr, $vovel);
    $result = implode('', $filtredData);
    return $result;
}

echo disemvowel("This website is for losers LOL!");
