<?php

// The array_search function in PHP is used to search for
//  a given value in an array and return the corresponding key 
//  if the value is found. If the value is not found, it returns false.

//  array_search(value, array, strict) 

// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

// Returns the key for the value if it is found in the array.
// Returns false if the value is not found.

$array = ["apple", "banana", "cherry"];
$key = array_search("orange", $array);

var_dump($key); // Output: bool(false)