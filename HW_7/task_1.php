<?php

header ("Content-type: image/png");

$img = imagecreatetruecolor(301, 301);

$white = imagecolorallocate($img, 255,255,255);
$black = imagecolorallocate($img, 0,0,0);

imagearc($img,50,50,100,100,180,270, $white);
imageline($img,50,0,250,0, $white);
imagearc($img,250,50,100,100,270,360, $white);
imageline($img,300,50,300,250, $white);
imagearc($img,250,250,100,100,0,90, $white);
imageline($img,50,300,250,300, $white);
imagearc($img,50,250,100,100,90,180, $white);
imageline($img,0,250,0,50, $white);

imagepng($img);

imagedestroy($img);