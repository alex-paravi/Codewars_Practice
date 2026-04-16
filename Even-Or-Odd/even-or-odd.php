<?php

function even_or_odd($integer)
{
    return ($integer % 2 === 0) ? "Even" : "Odd";
}

echo even_or_odd(0);
