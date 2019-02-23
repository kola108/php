<?php

header ("Content-type: image/jpeg");

$img = imagecreatetruecolor(301, 301);

$green = imagecolorallocate($img, 0,255,0);
$red = imagecolorallocate($img, 255,0,0);

imagerectangle($img,0,0,250,250, $green);
imageellipse($img,100,100,100,100, $red);

imagejpeg($img, 'image.jpeg');

imagedestroy($img);