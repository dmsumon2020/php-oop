<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 

$firstNames = ['John', 'Jane', 'Din'];
$lastNames = ['Doe', 'Smith', 'Sumon'];

function combineNames($firstNames, $lastName){
    return $firstNames .' '. $lastName;
}

$combinedNames = array_map('combineNames', $firstNames, $lastNames);

echo '<pre>';
print_r($combinedNames);
echo '</pre>';