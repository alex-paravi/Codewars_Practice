<?php

function solution($str, $ending)
{

    return str_ends_with($str, $ending);
}

var_dump(solution("ai", "ai"));
