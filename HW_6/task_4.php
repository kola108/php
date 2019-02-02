<?php
/*---------------Task4----------------*/

if (isset($_POST["login"])) {
    $login = $_POST["login"];
} else { echo 'login is empty'; }

if (isset($_POST["password"])) {
    $password = $_POST["password"];
} else { echo 'password is empty'; }

if (isset($_POST["eMail"])) {
    $eMail = $_POST["eMail"];
} else { echo 'eMail is empty'; }

$loginPattern = "^[a-zа-яA-ZА-Я0-9_]{0,14}$";
$passwordPattern = "^[a-zа-я0-9_-]{8,}$";
$emailPattern = "^[0-9a-zA-Z_\.]+@[0-9a-z_^\.]+\.[a-z]{2,6}$";

$isLoginCorrect = false;
$isPasswordCorrect = false;
$isEmailCorrect = false;

$isLoginCorrect = mb_ereg($loginPattern, $login);
$isPasswordCorrect = mb_ereg($passwordPattern, $password);
$isEmailCorrect = mb_ereg($emailPattern, $eMail);

if (!$isLoginCorrect) {
    echo 'login is not correct';
}

if (!$isPasswordCorrect) {
    echo 'Password is not correct';
}

if (!$isEmailCorrect) {
    echo 'Email is not correct';
}

if ($isLoginCorrect && $isPasswordCorrect && $isEmailCorrect) {
    echo 'All data is correct.';
}