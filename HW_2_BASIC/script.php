<?php

if(($_POST['userAge'] < 18) && (!empty($_POST))){
    echo  'Hi ' . $_POST['userName'] . ' you are young person!';
} elseif(($_POST['userAge'] >= 18) && (!empty($_POST))) {
    echo  'Okay ' . $_POST['userName'] . ' now lets go drink vodka!';
} else {
    echo "error";
}