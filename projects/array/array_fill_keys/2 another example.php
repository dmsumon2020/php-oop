<?php

// Initializing Settings with Default Values
echo '<h3>Example - 2</h3>';

$settings = ['theme', 'language', 'timezone'];
$defaultSettingValue = 'default';

$configArray = array_fill_keys($settings, $defaultSettingValue);

echo '<pre>';
print_r($configArray);
echo '</pre>';