<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 

$words = ["apple", "banana", "cherry"];
// make the array ["Fruit : apple", "Fruit : banana", "Fruit : cherry"]

$result = array_map(function ($word) {
    return 'Fruit : ' . $word;
}, $words);



echo '<pre>';
print_r($result);
echo '</pre>';