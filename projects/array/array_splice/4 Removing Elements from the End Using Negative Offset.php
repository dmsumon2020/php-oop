<?php

$input = array("red", "green", "blue", "yellow", "purple");
echo "Original array: ";

echo '<pre>';
print_r($input);
echo '</pre>';

// Remove 2 elements starting from the second last element
$removed = array_splice($input, -2, 2);
echo "Removed elements: ";

echo '<pre>';
print_r($input);
echo '</pre>';

echo "Array after array_splice(): ";

echo '<pre>';
print_r($input);
echo '</pre>';