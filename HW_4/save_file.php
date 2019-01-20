<?php

if (isset($_FILES["file"])) {
    if($_FILES["file"]["error"][0]) {
        echo "File ". $_FILES["file"]["name"][0] ." uploading error! <br>";
    } else {
        echo "File ". $_FILES["file"]["name"][0] ." successfully loaded! <br>";
    }

    if($_FILES["file"]["error"][1]) {
        echo "File ". $_FILES["file"]["name"][1] ." uploading error! <br>";
    } else {
        echo "File ". $_FILES["file"]["name"][1] . " successfully loaded! <br>";
    }

    if($_FILES["file"]["error"][2]) {
        echo "File ". $_FILES["file"]["name"][2] ." uploading error! <br>";
    } else {
        echo "File " . $_FILES["file"]["name"][2] . " successfully loaded! <br>";
    }

    if($_FILES["file"]["error"][3]) {
        echo "File ". $_FILES["file"]["name"][3] ." uploading error! <br>";
    } else {
        echo "File ". $_FILES["file"]["name"][3] ." successfully loaded! <br>";
    }
}