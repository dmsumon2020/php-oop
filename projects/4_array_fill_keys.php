<?php
echo '<h3>Example - 1</h3>';

$keys = ['a', 'b', 'c'];
$value = 0;

$result = array_fill_keys($keys, $value);

echo '<pre>';
print_r($result);
echo '</pre>';




// Initializing Settings with Default Values
echo '<h3>Example - 2</h3>';

$settings = ['theme', 'language', 'timezone'];
$defaultSettingValue = 'default';

$configArray = array_fill_keys($settings, $defaultSettingValue);

echo '<pre>';
print_r($configArray);
echo '</pre>';