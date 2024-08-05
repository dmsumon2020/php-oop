<?php

$associativeArray = [
    'name' => 'Alice',
    'age' => 25,
    'city' => 'New York'
];

$transformedKeys = array_combine(
    array_map('strtoupper', array_keys($associativeArray)),
    array_values($associativeArray)
);

echo '<pre>';
print_r($transformedKeys);
echo '<pre>';