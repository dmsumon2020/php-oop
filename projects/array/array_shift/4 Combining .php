<?php

// You can use array_shift in combination with other array functions for more complex operations.

$queue = ["first", "second", "third"];
$processedItems = [];

while (!empty($queue)) {
    $item = array_shift($queue);
    $processedItems[] = strtoupper($item);
}

echo '<pre>';
print_r($processedItems);
echo '</pre>';