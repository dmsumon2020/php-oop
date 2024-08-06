<?php

// Certainly! The array_shift function in PHP is used to remove the first element 
// from an array and return it. This function will reindex the remaining elements 
// in the array with starting index 0.


$fruits = ["apple", "banana", "cherry"];
$firstFruit = array_shift($fruits);

echo $firstFruit;  // Outputs: apple

echo '<pre>';
print_r($fruits);
echo '</pre>';