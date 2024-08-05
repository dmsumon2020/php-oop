<?php

$string = '<p>I want to kill and murder him with a knife. Because he is a bad man</p>';

$flaggedWords = [
    'kill',
    'murder',
    'knife',
    'bad'
];

$pattern = '/(kill|murder|knife|bad)/i';
$replacement = '<span style="color: red;">(censored)</span>';

$string = preg_replace($pattern, $replacement, $string);

echo $string;