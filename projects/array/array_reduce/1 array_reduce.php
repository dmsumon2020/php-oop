<?php

//The array_reduce() function in PHP is used to reduce an array 
// to a single value using a callback function. It iteratively 
// applies the callback function to the elements of the array, 
// carrying over the result from each iteration into the next.

// array_reduce(array, myFunction, initial) 

// Summing the Elements of an Array

function sum($carry, $item) {
    return $carry + $item;
}

$numbers = array(1, 2, 3, 4, 5);
$result = array_reduce($numbers, 'sum', 0);
echo "Sum of array elements: " . $result ;
