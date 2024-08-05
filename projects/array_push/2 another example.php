<?php

$colors = ["red", "green"];
$newColors = ["blue", "yellow"];

array_push($colors, ...$newColors);

echo '<pre>';
print_r($colors);
echo '</pre>';


$nestedArray = [
    ["name" => "John", "age" => 28],
    ["name" => "Jane", "age" => 32]
];
$newPerson = ["name" => "Doe", "age" => 45];