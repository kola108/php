<?php

$file = "text.txt";

if (file_exists($file)) {

    $text = file($file) or die("error");

    foreach($text as $key => $value){
        if(($key >= 5)&&($key <= 10)){
            echo $value. "<br>";
        }
    }
} else {
    echo "error";
}
