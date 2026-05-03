<?php

function descendingOrder(int $n): int
{
    $array = str_split($n);
    rsort($array);
    $result = implode("", $array);
    return (int)$result;
}


echo descendingOrder(1234235);
