<?php

// array_map is a built-in PHP function that applies a user-defined callback function to every element of an array and returns a new array containing the results. It's a powerful tool for transforming array data.

echo '<h2>Example - 1</h2>';

function combine_names($firstName, $lastName) {
    return $firstName . ' ' . $lastName;
  }
  
  $firstNames = ['John', 'Jane', 'Doe'];
  $lastNames = ['Doe', 'Smith', 'Johnson'];
      
  $fullNames = array_map('combine_names', $firstNames, $lastNames);
  
  echo '<pre>';
  print_r($fullNames); // Output: Array ( [0] => John Doe [1] => Jane Smith [2] => Doe Johnson )
  echo '</pre>';









//Using a Built-In PHP Function

  echo '<h2>Example - 2</h2>';
  
  $strings = ["apple", "banana", "cherry"];
  $uppercasedStrings = array_map('strtoupper', $strings);
  
  echo '<pre>';
  print_r($uppercasedStrings);
  echo '</pre>';








  // Imagine you have an array of product prices, and you want to apply a discount to each price:
  echo '<h2>Example - 3</h2>';

  $prices = [100, 200, 300, 400, 500];

  function discount($price){
    return $price *0.8;
  }

  $discountedPrices = array_map('discount', $prices);

  echo '<pre>';
  print_r($discountedPrices);
  echo '</pre>';











//Applying Different Functions to Different Arrays
echo '<h2>Example - 4</h2>';


$numbers = [1, 2, 3, 4, 5];
$letters = ['a', 'b', 'c', 'd', 'e'];

$result = array_map(function($number, $letter){
    return strtoupper($letter) . $number;
}, $numbers, $letters);

echo '<pre>';
print_r ($result);
echo '</pre>';



$values = [1, null, 2, null, 3, 4, null];

$filteredValues = array_filter(array_map(function($value) {
    return $value !== null ? $value : null;
}, $values));





//Prepending and Appending to Array Elements

echo '<h2>Example - 5</h2>';


$words = ["apple", "banana", "cherry"];

function prependFruit($words){
    return 'Fruit : ' . $words;
}

$result = array_map('prependFruit', $words);

echo '<pre>';
print_r($result);
echo '<pre>';


//Prepending and Appending to Array Elements Using anonymous function

echo '<h2>Example - 6</h2>';

$words = ["apple", "banana", "cherry"];

$result = array_map(function($word){
    return 'Fruit : ' . $word;
}, $words);

echo '<pre>';
print_r($result);
echo '<pre>';



// make the array values uppercase as well as prepend the word 'Fruit' 
echo '<h2>Example - 7</h2>';

$words = ["apple", "banana", "cherry"];

$result = array_map(function($word){
    return 'FRUIT : ' . strtoupper($word); 
}, $words);

echo '<pre>';
print_r($result);
echo '<pre>';




// You can filter out non-numeric values and then transform the remaining values.
echo '<h2>Example - 8</h2>';

$values = [10, "twenty", 30, "forty", 50];
$numericValues = array_filter($values, 'is_numeric');

echo '<pre>';
print_r($numericValues);
echo '<pre>';


//[john] => john is 25 years old
//Transforming an Associative Array
echo '<h2>Example - 9</h2>';

$users = [
    'john' => 25,
    'jane' => 28,
    'doe' => 22
];

$result = array_map(function($age, $name) {
    return strtoupper($name) . " is $age years old";
}, $users, array_keys($users));


echo '<pre>';
print_r($result);
echo '<pre>';



// Filtering and Transforming Data Simultaneously
echo '<h2>Example - 10</h2>';

$numbers = [1, 2, 3, 4, 5, 6];

$filteredNumbers = array_filter($numbers, function($n){
    return $n % 2 == 0;
});

$result = array_map(function($n){
    return $n*$n;
}, $filteredNumbers);

echo '<pre>';
print_r($result);
echo '<pre>';






//Applying a Callback to CSV Data

// [first_name] => John
// [last_name] => Doe
// [email] => john@example.com

//Incrementing Values in a Multi-dimensional Array


echo '<h2>Example - 11</h2>';

$numbers = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

// Callback function to increment each value
$callback = function($subArray) {
    return array_map(function($number) {
        return $number + 10;
    }, $subArray);
};

// Apply the callback to each sub-array
$incrementedNumbers = array_map($callback, $numbers);

// Output the incremented numbers
print_r($incrementedNumbers);



//Combining array_map with array_keys and array_values
echo '<h2>Example - 10</h2>';


$person = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'New York'
];

// Convert keys to uppercase
$uppercasedKeys = array_map('strtoupper', array_keys($person));
$values = array_values($person);

// Combine keys and values back into an associative array
$uppercasedPerson = array_combine($uppercasedKeys, $values);

print_r($uppercasedPerson);


//Transforming a Nested Array
echo '<h2>Example - 11</h2>';


$data = [
    ['john', 'doe', 'john@example.com'],
    ['jane', 'smith', 'jane@example.com'],
];

$formatPerson = function($person) {
    return [
        'first_name' => ($person[0]),
        'last_name' => ($person[1]),
        'email' => $person[2],
    ];
};


$formattedData = array_map($formatPerson, $data);

print_r($formattedData);




//

echo '<h2>Example - 12</h2>';

$keys = ['name', 'age', 'city'];
$values = ['Alice', 30, 'New York'];

// Callback function to combine key-value pairs
$combineArrays = function($key, $value) {
    return [$key => $value];
};

// Apply the function to each pair of elements
$combined = array_map($combineArrays, $keys, $values);

// Flatten the resulting array
$combinedArray = call_user_func_array('array_merge', $combined);

echo '<pre>';
print_r($combinedArray);
echo '</pre>';