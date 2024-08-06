<?php

// The array_merge function in PHP is used to merge one or more arrays 
// into a single array. If the input arrays have the same string keys, 
// then the later value for that key will overwrite the previous one. 
// If the arrays contain numeric keys, the values are appended.

//  array_merge(array1, array2, array3, ...) 

$array1 = [
    "color" => "red", 
    2, 
    4
];

$array2 = [
    "a", 
    "b", 
    "color" => "green", 
    "shape" => "trapezoid", 
    4
];

$result = array_merge($array1, $array2);

echo '<pre>';
print_r($result);
echo '</pre>';