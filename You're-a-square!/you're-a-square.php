<?php

function isSquare(int $n)
{
    if ($n < 0) {
        return false;
    }
    $sqrt = (int) floor(sqrt($n));
    $squared = $sqrt ** 2;
    if ($n !== $squared) {
        return false;
    }
    return true;
}

var_dump(isSquare(25));
