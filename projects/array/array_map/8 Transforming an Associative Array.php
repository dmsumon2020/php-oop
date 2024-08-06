<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 

$users = [
    'john' => 25,
    'jane' => 28,
    'doe' => 22
];

// Array
// (
//     [0] => JOHN is 25 years old
//     [1] => JANE is 28 years old
//     [2] => DOE is 22 years old
// )

$userKeys = array_keys($users);

echo '<pre>';
print_r($userKeys);
echo '</pre>';

$result = array_map(function ($age, $userKey) {
   return strtoupper($userKey) . ' is ' . $age . ' years old'; 
} , $users, $userKeys);

echo '<pre>';
print_r($result);
echo '</pre>';