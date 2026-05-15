<?php

function getSum(int $a, int $b): int
{

    $sum = 0;
    $min = min($a, $b);
    $max = max($a, $b);

    for ($i = $min; $i <= $max; $i++) {

        $sum += $i;
    }
    return $sum;
}

echo getSum(-1, 2);
