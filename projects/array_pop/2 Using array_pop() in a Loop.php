<?php
$numbers = array(1, 2, 3, 4, 5);

while (count($numbers) > 0) {
    $number = array_pop($numbers);
    echo "Popped: " . $number . '<br>';
    echo "Remaining array: ";

    echo '<pre>';
    print_r($numbers) . '<br>';
    echo '</pre>';
}