<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 

$strings = ["apple", "banana", "cherry"];

// make the values to uppercase

$result = array_map('strtoupper', $strings);

echo '<pre>';
print_r($result);
echo '</pre>';