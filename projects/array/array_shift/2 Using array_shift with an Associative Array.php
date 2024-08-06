<?php

$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];

$firstElement = array_shift($person);

echo $firstElement;  // Outputs: John

echo '<pre>';
print_r($person);  
echo '</pre>';