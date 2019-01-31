<?php

function putDataIntoFile($fileName) {
    if (file_exists($fileName)) {
        $file = fopen($fileName, "w+") or die("can't open the file");
        $myDataString = "Name:" . $_POST['name'] . ",Last name:" . $_POST['lastName'] . ",Email:" . $_POST['email'] . ",City:" . $_POST['city'] . ",Country:" . $_POST['country'];
        fwrite($file, $myDataString);
        fclose($file);
        echo 'the data was successfully saved on the ' . $fileName . ' file';
    } else {
        echo 'file do not exist';
    }
}

if (
    (isset($_POST['name']))||
    (isset($_POST['lastName']))||
    (isset($_POST['email']))||
    (isset($_POST['city']))||
    (isset($_POST['country']))
) {
    if ($_POST['country'] == 'Ukraine') {
        putDataIntoFile('ukraine.txt');
    } else {
        putDataIntoFile('other.txt');
    }
}