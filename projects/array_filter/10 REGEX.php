<?php
// validate email with regex

$emails = [
    'user@example.com', 
    'invalid-email', 
    'admin@domain.com', 
    'another_invalid', 
    'contact@website.org'
];

$callBack = function( $email ){
    $pattern = '/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,6})$/';
    return preg_match( $pattern, $email);
};

$valid_emails = array_filter($emails, $callBack);

echo '<pre>';
print_r($valid_emails);
echo '</pre>';