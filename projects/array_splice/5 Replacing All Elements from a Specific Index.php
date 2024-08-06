<?php
//Replacing All Elements from a Specific Index

$input = array("red", "green", "blue", "yellow", "purple");
echo "Original array: ";

echo '<pre>';
print_r($input);
echo '</pre>';

// Replace all elements starting from index 1 with "black" and "white"
array_splice($input, 1, count($input), array("black", "white"));
echo "Array after array_splice(): ";

echo '<pre>';
print_r($input);
echo '</pre>';