<?php

$file = "uploads/text.txt";

if (file_exists($file)) {

    $text = file($file) or die("error");

    foreach($text as $key => $value){
        if(($key >= (5 - 1))&&($key <= (10 - 1))){
            echo $value. "<br>";
        }
    }
} else {
    echo "error";
}
