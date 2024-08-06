<?php
$person = array(
    "name" => "Alice", 
    "age" => 30, 
    "city" => "New York"
);

echo "Original array: ";

echo '<pre>';
print_r($person);
echo '</pre>';

// Remove the last element
$lastValue = array_pop($person);
echo "Removed element: " . $lastValue . "\n";

echo "Array after array_pop(): ";

echo '<pre>';
print_r($person);
echo '</pre>';