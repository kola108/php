<?php

header ("Content-type: image/png");

$img = imagecreatetruecolor(301, 301);

$white = imagecolorallocate($img, 255,255,255);
$red = imagecolorallocate($img, 255,0,0);

imageellipse($img,100,150,50,50, $white);
imagefilledellipse($img,125,150,50,50, $red);
imagefilledellipse($img,150,150,50,50, $red);
imageellipse($img,175,150,50,50, $white);

imagepng($img);

imagedestroy($img);