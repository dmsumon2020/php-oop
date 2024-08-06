<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 


$keys = ['name', 'age', 'city'];
$values = ['Alice', 30, 'New York'];

// Array
// (
//     [name] => Alice
//     [age] => 30
//     [city] => New York
// )

// Callback function to combine key-value pairs
$combineArrays = function($key, $value) {
    return [$key => $value];
};

// Apply the function to each pair of elements
$combined = array_map($combineArrays, $keys, $values);

// Flatten the resulting array
$combinedArray = call_user_func_array('array_merge', $combined);

echo '<pre>';
print_r($combinedArray);
echo '</pre>';