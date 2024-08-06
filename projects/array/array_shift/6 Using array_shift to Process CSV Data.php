<?php

// Suppose you have a CSV file and you want to remove the header row before processing the data.

$data = [
    ["Name", "Age", "Occupation"],
    ["Alice", 30, "Engineer"],
    ["Bob", 25, "Designer"],
    ["Charlie", 35, "Teacher"]
];


$header = array_shift($data);

echo '<pre>';
print_r($header);  
echo '</pre>';

echo '<pre>';
print_r($data);
echo '</pre>';  