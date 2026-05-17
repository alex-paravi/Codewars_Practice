<?php

function longest(string $string1, string $string2): string
{
    return count_chars($string1 . $string2, 3);
}

var_dump(longest("aretheyhere", "yestheyarehere"));
