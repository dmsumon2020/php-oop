<?php
//filter an array according to allowed indexes
$colors = ["red", "(green)", "blue", "(yellow)", "purple", "(white)"];
$allowedIndexes = [1, 3, 5];



$allowedColors = array_filter ($colors, function ($color, $index) use ($allowedIndexes) {
    return in_array($index, $allowedIndexes);
}, ARRAY_FILTER_USE_BOTH);



echo '<pre>';
print_r($allowedColors);
echo '</pre>';