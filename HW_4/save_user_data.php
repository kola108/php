<?php

$fileName = "user.txt";

if (file_exists($fileName)) {

    $file = fopen($fileName, "w+") or die("can't open the file");

    fputs($file, "user name: " . $_GET["userName"] . "   ");
    fputs($file, "login: " . $_GET["login"] . "   ");
    fputs($file, "password: " . $_GET["password"] . "   ");
    fputs($file, "confirm password: " . $_GET["confirmPassword"] . "   ");
    fputs($file, "email: " . $_GET["email"] . "   ");
    fputs($file, "sex: " . $_GET["sex"] . "   ");
    fputs($file, "birthday: " . $_GET["birthday"] . "   ");
    fputs($file, "country: " . $_GET["country"] . "   ");
    fputs($file, "city: " . $_GET["city"] . "   ");

    echo "<p>file text:</p> <pre>" . file_get_contents($fileName) . "</pre>";

    fclose($fileName);

} else {
    echo "can't open the file";
}