<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 

$person = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'New York'
];

// Array
// (
//     [NAME] => Alice
//     [AGE] => 30
//     [CITY] => New York
// )

$personKeys = array_map('strtoupper', array_keys($person));;
$arrayValues = array_values($person);
$combined = array_combine($personKeys, $person);

echo '<pre>';
print_r($combined);
echo '</pre>';