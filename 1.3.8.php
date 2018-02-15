<?php
function getSum($numberOne, $numberTwo)
{
    $sum = $numberOne + $numberTwo;
    return $sum;
}

$returnedValue = getSum(3, 4);
echo sprintf(Returned value is%d, $returnedValue);