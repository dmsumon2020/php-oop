<?php

// Finding the Minimum Value in an Array

$numbers = array(500, 300, 600, 800, 100, 750, 200, 150, 550);

function minValue($initial, $number) {
    return ($initial < $number) ? $initial : $number;
}

$minValue = array_reduce($numbers, 'minValue', $numbers[0]);

echo $minValue;