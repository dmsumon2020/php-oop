<?php
//Filtering Nested Arrays

// Filter an array of nested arrays to retain only those with a specific key-value pair as for example Electronics

$products = [
    ['name' => 'Laptop', 'category' => 'Electronics'],
    ['name' => 'Banana', 'category' => 'Fruit'],
    ['name' => 'Phone', 'category' => 'Electronics'],
    ['name' => 'Apple', 'category' => 'Fruit'],
    ['name' => 'LED TV', 'category' => 'Electronics'],
];    






















$electronicProducts = array_filter($products, function ($product) {
    return $product['category'] == 'Electronics';
});

echo '<pre>';
print_r($electronicProducts);
echo '</pre>';