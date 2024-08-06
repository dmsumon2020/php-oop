<?php

$colors = ["red", "green", "blue", "yellow", "purple"];
$indices = [1, 3, 4];

$callBack = function ($index) use ($colors) {
        return $colors[$index];
};

$newColors = array_map($callBack, $indices);

echo '<pre>';
print_r($newColors);
echo '<pre>';


