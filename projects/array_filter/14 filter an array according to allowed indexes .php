<?php
//filter an array according to allowed indexes
$colors = ["red", "(green)", "blue", "(yellow)", "purple", "(white)"];
$allowedIndexes = [1, 3, 5];





















// Define the callback function
$callBack = function ($value, $index) use ($allowedIndexes) {
    return in_array($index, $allowedIndexes);
};

// Use array_filter with the callback function
$filteredColors = array_filter($colors, $callBack, ARRAY_FILTER_USE_BOTH);

// Print the filtered array
echo '<pre>';
print_r($filteredColors);
echo '</pre>';