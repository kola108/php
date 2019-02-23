<?php

/*---------------Task1----------------*/

$myStr = '12345';

function isItNumber($str) {
    $pattern = '/^[1-9][0-9]{0,4}$/';
    return preg_match($pattern, $str);
}

if (isItNumber($myStr)) {
    echo 'the string ' . $myStr . ' is number';
} else {
    echo 'the string ' . $myStr . ' is not a number';
}

/*---------------Task2----------------*/

$myStr = 'some    string  with spaces';

function replaceSpaces($str) {
    $pattern = '|[\s]+|s';
    return preg_replace($pattern, ' ', $str);
}

echo  replaceSpaces($myStr);

/*---------------Task3----------------*/

$myStr = '<TITLE>Some Title</TITLE>';

function findTextInTeg($str, $teg) {
    $pattern = '/<' . $teg . '[^>]*>(.*?)<\/' . $teg . '>/i';
    preg_match($pattern, $str,$matches);

    return $matches[1];
}

echo findTextInTeg($myStr, 'title');
