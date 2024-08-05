<?php

function replaceFlaggedWords($string, array $flaggedWords, $replacement){

    $pattern = '/(' . implode('|', array_map('preg_quote', $flaggedWords))  .')/i';
    return preg_replace($pattern, $replacement, $string);
    
}

$string = '<p>I want to kill and murder him with a knife. Because he is a bad man. It is a bad habit.</p>';
$flaggedWords = [
    'kill',
    'murder',
    'knife',
    'bad'
];
$replacement = '<span style="color: red;">(censored)</span>';

$modifiedString = replaceFlaggedWords($string, $flaggedWords, $replacement);

echo $modifiedString;