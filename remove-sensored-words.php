<?php 

$string = 'Tui Kuttar bachcha kutta r ekta haramkhor. Tor pola haramir bassa. Geli kutta eikhan thika? khOniker POLa vaat kha';


$flaggedWords = [
    'Kutta',
    'Kuttar',
    'Harami',
    'Haramir Bachcha',
    'Haramir Bassa',
    'Haramkhor',
    'Khoniker Pola',
];

$replacement = '[REDACTED]';

$pattern = '/\b(' . implode('|', array_map('preg_quote', $flaggedWords)) .')\b/i'; 

$string = preg_replace($pattern, $replacement, $string);

echo $string;