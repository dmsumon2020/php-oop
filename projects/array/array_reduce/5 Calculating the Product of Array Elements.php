<?php

//Calculating the Product of Array Elements

function product($carry, $item) {
    return $carry * $item;
}

$numbers = array(1, 2, 3, 4, 5);
$result = array_reduce($numbers, 'product', 1);

echo "Product of array elements: " . $result . "\n";