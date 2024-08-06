<?php
$multiArray = [
    ["name" => "A", "value" => 1],
    ["name" => "B", "value" => 2]
];

$newEntries = [
    ["name" => "C", "value" => 3],
    ["name" => "D", "value" => 4]
];

foreach ($newEntries as $entry) {
    array_push($multiArray, $entry);
}


echo '<pre>';
print_r($multiArray);
echo '<pre>';
