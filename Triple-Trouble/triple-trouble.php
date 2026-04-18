<?php

function triple_trouble(string $one, string $two, string $three)
{
    $result = "";
    $length = mb_strlen($one);
    for ($i = 0; $i < $length; $i++) {
        $result .= $one[$i] . $two[$i] . $three[$i];
    }
    return $result;
}


$one = "aaa";
$two = "bbb";
$three = "ccc";

echo triple_trouble($one, $two, $three);
