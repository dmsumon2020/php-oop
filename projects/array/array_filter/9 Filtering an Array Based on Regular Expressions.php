<?php

$emails = ['user@example.com', 'invalid-email', 'admin@domain.com', 'another_invalid', 'contact@website.org'];



























$valid_emails = array_filter($emails, function($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
});

echo '<pre>';
print_r($valid_emails);
echo '</pre>';