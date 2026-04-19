<?php

function litres(float $t): int
{
    $litres_per_hour = 0.5;
    $all_litres = floor($litres_per_hour * $t);
    return $all_litres;
}

echo litres(11.8);
