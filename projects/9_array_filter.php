<?php

//array_filter(array $array, callable $callback);

echo '<h4>Example - 1</h4>';

$values = [1, null, 2, null, 3, 4, null];

$filteredValues = array_filter($values);

echo '<pre>';
print_r($filteredValues);
echo '</pre>';





//Filter out all the odd numbers from an array:

echo '<h4>Example - 2</h4>';

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$even_numbers = array_filter($numbers, function($number) {
    return $number % 2 === 0;
});

echo '<pre>';
print_r($even_numbers);
echo '</pre>';



//Remove all null, false, 0, and empty string values from an array:
echo '<h4>Example - 3</h4>';

$values = ['apple', '', 'banana', null, 'cherry', 0, 'date', false];

$filtered_values = array_filter($values);

echo '<pre>';
print_r($filtered_values);
echo '</pre>';



// Filter an associative array to retain only those elements where the value is greater than 20:
echo '<h4>Example - 4</h4>';


$ages = [
    'Alice' => 25, 
    'Bob' => 19, 
    'Charlie' => 30, 
    'David' => 15
];

$callback = function($number){
    return $number > 20;
};

$result = array_filter($ages, $callback);

echo '<pre>';
print_r($result);
echo '</pre>';



//Filter an array where the keys start with the letter 'A':
echo '<h4>Example - 5</h4>';


$people = ['Alice' => 25, 'Bob' => 19, 'Ann' => 30, 'David' => 15];

$filtered_people = array_filter($people, function($value, $key) {
    return strpos($key, 'A') === 0;
}, ARRAY_FILTER_USE_BOTH);


echo '<pre>';
print_r($filtered_people);
echo '</pre>';


// Filter an array where the values contain the substring 'berry':
// [2] => blueberry
// [4] => strawberry
echo '<h4>Example - 6</h4>';


$fruits = ['apple', 'banana', 'blueberry', 'cherry', 'strawberry'];

$berryFruits = array_filter($fruits, function($fruit) {
    return strpos($fruit, 'berry') !== false;
});

echo '<pre>';
print_r($berryFruits);
echo '</pre>';



//Filter an array to retain only positive numbers:
echo '<h4>Example - 7</h4>';


$numbers = [-10, 0, 5, -3, 8, -1, 7];

$positiveNumbers = array_filter($numbers, function($number) {
    return $number > 0;
});

echo '<pre>';
print_r($positiveNumbers);
echo '</pre>';


// Filtering Non-Empty Strings