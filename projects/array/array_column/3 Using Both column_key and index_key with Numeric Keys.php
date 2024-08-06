<?php

// The array_column function in PHP is used to return 
// the values from a single column in the input array. 
// It's particularly useful when you need to extract 
// specific columns of data from a multi-dimensional 
// array.

// array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array

//  array_column(array, column_key, index_key)


$records = [
    [
        0 => 1,
        1 => 'John',
        2 => 28
    ],
    [
        0 => 2,
        1 => 'Jane',
        2 => 32
    ],
    [
        0 => 3,
        1 => 'Doe',
        2 => 45
    ]
];

$names = array_column($records, 1, 2);

echo '<pre>';
print_r($names);
echo '</pre>';