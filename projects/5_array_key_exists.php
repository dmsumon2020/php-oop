<?php
//array_key_exists ( mixed $key , array $search );
// $key: The key to search for. Can be any valid array key type (integer, string, etc.).
// $search: The array to search in.
// Returns: true if the key exists, false otherwise.

echo '<h3>Example - 1</h3>';

$person = [
    'name' => 'Alice',
    'age' => 30,
    'email' => 'alice@example.com'
];

// Check if 'age' key exists
if (array_key_exists('age', $person)) {
    echo "The 'age' key exists in the array.";
} else {
    echo "The 'age' key does not exist in the array.";
}






// Check if index 1 exists
echo '<h3>Example - 2</h3>';


$colors = ['red', 'green', 'blue'];

if (array_key_exists(1, $colors)) {
    echo "Index 1 exists in the array.";
} else {
    echo "Index 1 does not exist in the array.";
}








//Check if a key exists in a nested array.
echo '<h3>Example - 3</h3>';


$users = [
    'user1' => ['name' => 'John', 'email' => 'john@example.com'],
    'user2' => ['name' => 'Jane', 'email' => 'jane@example.com']
];

// Check if 'email' key exists for 'user1'
if (array_key_exists('email', $users['user1'])) {
    echo "The 'email' key exists for 'user1'.";
} else {
    echo "The 'email' key does not exist for 'user1'.";
}


//


$person = [
    'name' => 'Alice',
    'age' => 30,
    'city' => 'New York'
];

function myCallBack($value, $key){
    return $key .': ' . $value ;
}


$result = array_map('myCallBack', $person, array_keys($person));


echo '<pre>';
print_r($result);
echo '</pre>';