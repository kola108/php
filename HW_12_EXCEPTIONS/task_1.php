<?php

try {
    $fileName = 'test.txt';

    if ( !file_exists($fileName) ) {
        throw new Exception('File with name ' . $fileName . ' not exist!');
    }

    $fp = fopen($fileName, "r");
    if ( !$fp ) {
        throw new Exception('File ' . $fileName . ' open failed.');
    }
    fclose($fp);

} catch ( Exception $e ) {
    echo $e->getMessage();
}