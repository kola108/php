<?php

if(isset($_POST["userName"])){

    session_start();

    $userMessage =  "Welcome " . $_POST["userName"] . "<br>";

    $_SESSION["userMessage"] = $userMessage;

    require('page2.html');
} else {
    echo "error";
}

