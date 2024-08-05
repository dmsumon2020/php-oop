<?php
// array_slice(array, start, length, preserve) 

$colors = ["red", "green", "blue", "yellow", "purple"];

$slice = array_slice($colors, 2, 2);


echo '<pre>';
print_r($slice);
echo '</pre>';
