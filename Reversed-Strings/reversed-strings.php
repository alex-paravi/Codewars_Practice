<?php

function solution(string $str): string
{
    $result = strrev($str);
    return $result;
}

echo solution('world');
