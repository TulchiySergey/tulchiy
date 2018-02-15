<?php
function sum($x, $y, ...$dod) {
    $arg = func_get();
    echo array_sum($arg);
}

//sum(2, 4, 7, 4, 8, 10);



function multiply($x1 = 0, $x2 = 1)
{
    echo $x1 * $x2;
}

multiply(1234567898654);