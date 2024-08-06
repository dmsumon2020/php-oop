<?php

//Calculating the Average of Array Elements

$numbers = array(2, 4, 6, 8, 10);

function summation($initial, $number){
    return $initial + $number;
}

$summationOfNumbers = array_reduce($numbers, 'summation', 0);
$divisor = count($numbers);

echo $summationOfNumbers/$divisor;