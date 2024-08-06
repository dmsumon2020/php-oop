<?php

//Counting the Occurrences of a Specific Value

$fruits = array("apple", "banana", "apple", "orange", "apple");

function countOccurrences($carry, $item) {
    if ($item === 'apple') {
        $carry++;
    }
    return $carry;
}

$result = array_reduce($fruits, 'countOccurrences', 0);

echo "Number of apples: " . $result;