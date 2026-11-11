<?php

/*Very simple, given a number, find its opposite (additive inverse).*/

function opposite(int $n): int
{
    return $n * -1;
}

$number = 1;

var_dump(opposite($number));
