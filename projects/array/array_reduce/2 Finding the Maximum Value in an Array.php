<?php

// Finding the Maximum Value in an Array

$numbers = array(3, 1, 4, 1, 5, 9, 2, 6, 5);

function findMaxValue($carry, $number) {
    return ($carry > $number) ? $carry : $number;
}

$maximumValue = array_reduce($numbers, 'findMaxValue', $numbers[0]);

echo "Maximum value: " . $maximumValue ;