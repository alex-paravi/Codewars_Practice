<?php

function numberToString(int $num): string
{
    $result = (string) $num;
    return $result;
}

var_dump(numberToString(1234));
