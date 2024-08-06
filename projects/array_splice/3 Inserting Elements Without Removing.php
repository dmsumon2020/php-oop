<?php

// Inserting Elements Without Removing

$input = array("red", "green", "blue", "yellow", "purple");
echo "Original array: ";

echo '<pre>';
print_r($input);
echo '</pre>';

// Insert "black" and "white" at index 2 without removing any elements
array_splice($input, 2, 0, array("black", "white"));
echo "Array after array_splice(): ";

echo '<pre>';
print_r($input);
echo '</pre>';