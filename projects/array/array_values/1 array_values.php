<?php

$assocArray = [
    'name' => 'Alice',
    'age' => 25,
    'email' => 'alice@example.com'
];

$valuesArray = array_values($assocArray);

echo '<pre>';
print_r($valuesArray);
echo '</pre>';