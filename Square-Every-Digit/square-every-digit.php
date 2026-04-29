<?php

function square_digits(int $num): int
{
    $numArray = str_split($num);
    $result = "";
    foreach ($numArray as $elements) {
        $result .= pow($elements, 2);
    }
    return (int) $result;
}

var_dump(square_digits(765));
