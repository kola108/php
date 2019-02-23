<?php

header ("Content-type: image/png");

$img = imagecreatetruecolor(301, 301);

$white = imagecolorallocate($img, 255,255,255);
$red = imagecolorallocate($img, 255,0,0);

$xStart;
$yStart;
$xEnd = 100;
$yEnd = 100;

for ($i = 0; $i < 8; $i++) {

    $xStart = $xEnd;
    $yStart = $yEnd;

    switch ($i) {
        case 0:
            $xEnd += 10;
            break;
        case 1:
            $xEnd += 10;
            break;
        case 2:
            $yEnd += 10;
            break;
        case 3:
            $yEnd += 10;
            break;
        case 4:
            $xEnd -= 10;
            break;
        case 5:
            $xEnd -= 10;
            break;
        case 6:
            $yEnd -= 10;
            break;
        case 7:
            $yEnd -= 10;
            break;
    }

    if ($i % 2) {
        imageline($img,$xStart,$yStart,$xEnd,$yEnd, $white);
    } else {
        imageline($img,$xStart,$yStart,$xEnd,$yEnd, $red);
    }

}


imagepng($img);

imagedestroy($img);