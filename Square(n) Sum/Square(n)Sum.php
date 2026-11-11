<?php

/*Complete the square sum function so that it squares each number passed into it and then sums the results together.*/

$array = [1, 2, 2];

function square_sum(array $numbers): int
{
    $result = 0;
    foreach ($numbers as $number) {
        $result += $number * $number;
    }
    return $result;
}

var_dump(square_sum($array));


/*
1) Вариант с аккумулирующей переменной самый популярный.
2) Также есть варианты с маппингом и суммированием массива.
3) Для возведения в степень можно использовать функцию pow().
*/