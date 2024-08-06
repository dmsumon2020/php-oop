<?php

// The array_splice() function in PHP is used to 
// remove a portion of an array and replace it with 
// something else. It can also be used to simply 
// remove elements from an array without replacing them.

//array_splice(array, start, length, array) 


$input = array("red", "green", "blue", "yellow", "purple");
echo "Original array: ";

echo '<pre>';
print_r($input);
echo '</pre>';

// Remove 2 elements starting from index 1
$removed = array_splice($input, 1, 2);
echo "Removed elements: ";

echo '<pre>';
print_r($removed);
echo '<pre>';

echo "Array after array_splice(): ";

echo '<pre>';
print_r($input);
echo '<pre>';