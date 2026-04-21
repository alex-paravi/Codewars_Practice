<?php

function positive_sum($arr)
{
    $sum = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $sum += $num;
        }
    }
    return $sum;
}

echo positive_sum([1, -2, 3, 4, 5]);
