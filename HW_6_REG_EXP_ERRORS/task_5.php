<?php

$myStr = 'my string';

echo $mySt;


function shutdown() {
    $error = error_get_last();
    if (isset($error)) {
        $file = fopen($error['file'], 'r') or die('cannot open the file with the error');
        $result = file($error['file']);

        foreach($result as $index => $value) {
            if ($index === ($error['line'] - 1)) {
                echo "<span style='color: red; font-weight: bold;'>" . $value . " </span> --> " . $error['message'] . "<br>";
                break;
            } else {
                echo $value . "<br>";
            }
        }


       // echo $error['message'] . "<br> The wong code is: " . $result[($error['line'] - 1)];

        fclose($file);
    }
}

register_shutdown_function('shutdown');
