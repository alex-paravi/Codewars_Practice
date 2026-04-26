<?php

function get_average(array $a): int
{
    $length = count($a);
    /*for ($i = 0; $i < $length; $i++) {
        $sum += $a[$i];
    }*/
    $sum = array_sum($a);
    $result = $sum / $length;
    return floor($result);
}
echo get_average([1, 2]);
