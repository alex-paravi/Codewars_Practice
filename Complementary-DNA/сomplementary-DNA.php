<?php

function DNA_strand(string $string): string
{
    $search = "ATCG";
    $replace = "TAGC";
    return strtr($string, $search, $replace);
}

var_dump(DNA_strand("ATTGC"));
