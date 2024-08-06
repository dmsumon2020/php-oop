<?php

// $colors = ["red", "green", "blue", "yellow", "purple"];
// $colors = ["red", "green", "blue"];

$colors = ["red", "green", "blue", "yellow", "purple"];
$firstThreeColors = [];

for ($i = 0; $i < 3; $i++) {
    $firstThreeColors[] = array_shift($colors);
}

echo '<pre>';
print_r($firstThreeColors);
echo '</pre>';
