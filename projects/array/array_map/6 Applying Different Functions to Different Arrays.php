<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 


$numbers = [1, 2, 3, 4, 5];
$letters = ['a', 'b', 'c', 'd', 'e'];

// create a new array with the values like A1, B2, C3, D4, E5

$result = array_map(function ($letter, $number) {
    return strtoupper($letter) . $number;
}, $letters, $numbers);

echo '<pre>';
print_r($result);
echo '</pre>';