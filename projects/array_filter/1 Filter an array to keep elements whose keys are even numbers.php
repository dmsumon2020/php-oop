<?php
//Filter an array to keep elements whose keys are even numbers

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];



















$evenKeys = array_filter($array, function($value, $key) {
    return $key % 2 === 0;
}, ARRAY_FILTER_USE_BOTH);

echo '<pre>';
print_r($evenKeys);
echo '<pre>';