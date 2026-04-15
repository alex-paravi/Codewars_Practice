<?php

function  square_area($A)
{
    //$A = 1/4 L, где L - Длина окружности.
    //R = P/2pi, где R - Радиус окружности.
    //S = R**2, где S - Площадь квадрата.
    $length = $A * 4;
    $radius = $length / (2 * M_PI);
    $square = $radius ** 2;
    return round($square, 2);
}

print_r(square_area(2));
