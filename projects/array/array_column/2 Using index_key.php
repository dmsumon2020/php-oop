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
        'id' => 1,
        'name' => 'John',
        'age' => 28
    ],
    [
        'id' => 2,
        'name' => 'Jane',
        'age' => 32
    ],
    [
        'id' => 3,
        'name' => 'Doe',
        'age' => 45
    ]
];

$names = array_column($records, 'name', 'id');

echo '<pre>';
print_r($names);
echo '</pre>';