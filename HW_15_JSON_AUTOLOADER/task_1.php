<?php

$jsonFile = file_get_contents('user.json');

$user = json_decode($jsonFile, true);

echo "firstName: " . $user['firstName'] . "<br>";
echo "lastName: " . $user['lastName'] . "<br>";
echo "country: " . $user['address']['country'] . "<br>";
