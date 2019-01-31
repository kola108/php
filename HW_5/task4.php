<?php

$fileName = 'spam.txt';
$myIp = '196.168.1.1';

$file = fopen($fileName, "r") or die("file can't be opened");

$spamIps = file_get_contents($fileName) or die("file can't be reeded");

fclose($file);

$spamIpsArr = explode(',', $spamIps);

function isThisIpSpam($ip) {
    global $spamIpsArr;
    foreach($spamIpsArr as $value) {
        if ($value == $ip) {
            return "this Ip: " . $ip . " is a SPAM";
        }
    }
    return "this Ip: " . $ip . " is not a SPAM";
}

echo isThisIpSpam($myIp);