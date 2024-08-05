<?php
//Filter an associative array using only the keys:
// remove the black keys 

$colors = [
    'red' => '#FF0000', 
    'green' => '#00FF00', 
    'blue' => '#0000FF', 
    'black' => '#000000'
];





















$newColors = array_filter($colors, function ($key) {
    return $key != 'black';
}, ARRAY_FILTER_USE_KEY); 

echo '<pre>';
print_r($newColors);
echo '</pre>';