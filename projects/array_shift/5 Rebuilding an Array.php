<?php


$input = ["one", "two", "three"];
$output = [];

while (!empty($input)) {
    $element = array_shift($input);
    $output[] = $element . " processed";
}


echo '<pre>';
print_r($output);  
echo '</pre>';