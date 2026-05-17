<?php

function longest(string $string1, string $string2): string
{
    $longest = $string1 . $string2;
    $chars = str_split($longest);
    $unique = array_unique($chars);
    sort($unique);
    return implode('', $unique);
}

var_dump(longest("aretheyhere", "yestheyarehere"));
