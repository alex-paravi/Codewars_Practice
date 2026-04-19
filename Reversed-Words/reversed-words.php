<?php

function reverseWords($str)
{
    $pieces = explode(" ", $str);
    $reversed = array_reverse($pieces);
    $result = implode(" ", $reversed);
    return $result;
}

echo reverseWords("The greatest victory is that which requires no battle");
