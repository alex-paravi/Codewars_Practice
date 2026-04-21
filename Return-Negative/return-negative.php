<?php

function makeNegative($num)
{
    if ($num < 0) {
        $result = $num;
    } else {
        $result = $num * -1;
    }
    return $result;
}

echo makeNegative(-23);
