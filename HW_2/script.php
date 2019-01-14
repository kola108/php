<?php

if($_POST['userAge'] < 18){
    echo  'Hi ' . $_POST['userName'] . ' you are young person!';
} else {
    echo  'Okay ' . $_POST['userName'] . ' now lets go drink vodka!';
}