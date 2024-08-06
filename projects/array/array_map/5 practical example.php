<?php

// The array_map function in PHP applies a given 
// callback function to each element of one or 
// more arrays, returning an array containing 
// the results. Here's a basic syntax:

// array_map(callbackFunction, array1, array2, array3, ...) 

$prices = [100, 200, 300, 400, 500];

// imagine you want to give 20% discount to the prices. Make an array of discounted prices



$callback = function ($price) {
    return $price * 0.8;
};

$discountedPrice = arraY_map($callback, $prices);

echo '<pre>';
print_r($discountedPrice);
echo '</pre>';