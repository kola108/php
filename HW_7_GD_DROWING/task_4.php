<?php

function imageresize($outfile,$infile,$neww,$newh,$quality) {

    $im=imagecreatefromjpeg($infile);
    $im1=imagecreatetruecolor($neww,$newh);
    imagecopyresampled($im1,$im,0,0,0,0,$neww,$newh,imagesx($im),imagesy($im));

    imagejpeg($im1,$outfile,$quality);
    imagedestroy($im);
    imagedestroy($im1);
}

if (isset($_FILES["file"])) {

    if ($_FILES["file"]["type"] === 'image/jpeg') {
        echo 'file jpeg updated';
        imageresize($_FILES["file"]["name"], $_FILES["file"]["name"],80,80,75);
    } elseif ($_FILES["file"]["type"] === 'image/png') {
        echo 'file png updated';
        imageresize($_FILES["file"]["name"], $_FILES["file"]["name"],60,60,75);
    } else {
        echo 'please load jpeg or png';
    }

} else {
    echo 'error';
}