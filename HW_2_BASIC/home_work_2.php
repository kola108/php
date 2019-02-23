<?php

/*------------------------- task 5 -------------------------*/

$numberForFactorial = 5;

function findFactorial($num) {
    if ($num < 0) return 0;
    if ($num === 0) return 1;
    return $num*findFactorial($num - 1);
}

echo "Task 5 result: \n" .  findFactorial($numberForFactorial) . "\n";

/*------------------------- task 6 -------------------------*/

$myArr = [4, -2, 5, 19, -130, 0, 10];

function maxMin($arr) {
    $max = 0;
    $min = 0;

    foreach($arr as $val){
        if ($max < $val) {
            $max = $val;
        } elseif ($min > $val) {
            $min = $val;
        }
    }

    return ["max" => $max, "min" => $min];
}

$maxMinResult = maxMin($myArr);
echo "Task 6 max value: \n" . $maxMinResult["max"]  . "\n min value: \n" . $maxMinResult["min"] ;
