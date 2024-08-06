<?php 

//Filtering Multidimensional Arrays with Specific Conditions

//Filter a multidimensional array to retain only those sub-arrays with specific conditions met:

// whose scores are greater than 60

$data = [
    ['id' => 1, 'score' => 50],
    ['id' => 2, 'score' => 75],
    ['id' => 3, 'score' => 85],
    ['id' => 4, 'score' => 60]
];



















$result = array_filter( $data, function( $item ) {
    return $item['score'] > 60;
});

echo '<pre>';
print_r($result);
echo '</pre>';
