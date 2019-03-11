<?php

if (
    (isset($_POST['login']) || $_POST['login'] === '') &&
    (isset($_POST['email']) || $_POST['email'] === '') &&
    (isset($_POST['country']) || $_POST['country'] === '') &&
    (isset($_POST['city']) || $_POST['city'] === '')
) {
    $dataFromUser = [
        'login'=>$_POST['login'],
        'email'=>$_POST['email'],
        'country'=>$_POST['country'],
        'city'=>$_POST['city'],
    ];

    $fp = fopen('user.json', 'w');
    fwrite($fp, json_encode($dataFromUser));
    fclose($fp);

} else {
    echo "please enter all data";
}