<?php

//Filter an array of numbers to retain only those numbers that exist in another array:

$numbers = [1, 2, 3, 4, 5, 6];
$allowed_numbers = [2, 4, 6];





























$filtered_numbers = array_filter($numbers, function($number) use ($allowed_numbers) {
    return in_array($number, $allowed_numbers);
});

echo '<pre>';
print_r($filtered_numbers);
echo '</pre>';