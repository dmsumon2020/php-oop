<?php

//array_pop() function in PHP is used to remove the last element from an array. 
//This function modifies the original array and returns the 
//value of the removed element.

$fruits = array("apple", "banana", "cherry");
echo "Original array: ";
print_r($fruits);

// Remove the last element
$lastFruit = array_pop($fruits);
echo "Removed element: " . $lastFruit . "\n";

echo "Array after array_pop(): ";
print_r($fruits);