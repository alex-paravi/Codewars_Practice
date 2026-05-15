<?php

function solution($str, $ending)
{
    if ($ending === '') {
        return true;
    }
    $endingLength = -strlen($ending);
    $stringEnding = substr($str, $endingLength);
    return $stringEnding === $ending;
}

var_dump(solution("ai", "ai"));
