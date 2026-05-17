<?php

function boolToWord(bool $bool): string
{
    return $bool ? 'Yes' : 'No';
}

var_dump(boolToWord(true));
