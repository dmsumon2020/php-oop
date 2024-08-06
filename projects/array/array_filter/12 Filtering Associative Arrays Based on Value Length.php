<?php
// Filtering Associative Arrays Based on Value Length
//Filter an associative array to retain only those elements where the value's length is greater than 3:

$names = [
    'Alice'     =>  'Al', 
    'Bob'       =>  'Robert', 
    'Charlie'   =>  'Chuck', 
    'David'     =>  'Dave',
    'Sumon'     =>  'Sum',
];























$goodNames = array_filter($names, function ($name) {
    return strlen($name) > 3;
});

echo '<pre>';
print_r($goodNames);
echo '</pre>';