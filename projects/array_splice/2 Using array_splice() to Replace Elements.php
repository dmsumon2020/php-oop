<?php 

// Using array_splice() to Replace Elements

$input = array("red", "green", "blue", "yellow", "purple");
echo "Original array: ";

echo '<pre>';
print_r($input);
echo '</pre>';

// Replace 2 elements starting from index 1 with "black" and "white"
array_splice($input, 1, 2, array("black", "white"));
echo "Array after array_splice(): ";

echo '<pre>';
print_r($input);
echo '</pre>';