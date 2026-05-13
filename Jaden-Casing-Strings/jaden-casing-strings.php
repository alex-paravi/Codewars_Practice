<?php

function toJadenCase(string $string): string
{
    return ucwords($string);
}

echo toJadenCase("How can mirrors be real if our eyes aren't real");
