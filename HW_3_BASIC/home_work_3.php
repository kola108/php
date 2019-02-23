<?php

/*------------------------ task 1 ------------------------*/

$myNum = 345;

function reversNumber($num) {

    $result = (string)$num; //number -> string

    $result = strrev($result); //revers string

    return $result = (int)$result; //string -> number
}


echo "Task 1 result: " . reversNumber($myNum) . "\n";

/*------------------------ task 2 ------------------------*/

$myMonth = 6;

function findTimeOfYear($num) {
    switch ($num) {
        case 1:
        case 2:
        case 12:
            return "Winter";
        case 3:
        case 4:
        case 5:
            return "Spring";
        case 6:
        case 7:
        case 8:
            return "Summer";
        case 9:
        case 10:
        case 11:
            return "Autumn";
        default:
            return "Error";
    }
}

echo "Task 2 result: " . findTimeOfYear($myMonth) . "\n";

/*------------------------ task 3 ------------------------*/

$myStr = "NIKOLay";
$symbolsArr = ["a" => "A", "b" => "B", "c" => "C", "d" => "D", "e" => "E", "f" => "F", "g" => "G", "h" => "H", "i" => "I", "j" => "J", "k" => "K", "l" => "L", "m" => "M", "n" => "N", "o" => "O", "p" => "P", "q" => "Q", "r" => "R", "s" => "S", "t" => "T", "u" => "U", "v" => "V", "w" => "W", "x" => "X", "y" => "Y", "z" => "Z"];

function toLowerCase($str){

    $resultArr = [];
    global $symbolsArr;

    $resultArr[0] = $str[0];

    for ($i = 1; $i < strlen($str); $i++) {

        foreach($symbolsArr as $k => $v) {

            if ( $str[$i] === $v ) {

                $resultArr[] = $k;

            } elseif ( $str[$i] === $k) {

                $resultArr[] = $str[$i];
            }
        }
    }
    return $resultString = implode($resultArr);
}

echo "Task 3 result: " . toLowerCase($myStr) . "\n";

/*------------------------ task 4 ------------------------*/

$strDate1 = '2018-12-20';
$strDate2 = '15-01-2019';

function compareDates($data1, $data2) {

    $resultDate1 = strtotime($data1);
    $resultDate2 = strtotime($data2);

    $resultDiff = abs($resultDate2 - $resultDate1) / (3600 * 24);

    return $resultDiff;

}

echo "Task 4 result: " . compareDates($strDate2, $strDate1) . "\n";

/*------------------------ task 5 ------------------------*/

$myWeek = [1 => "Monday", 2 => "Tuesday", 3 => "Wednesday ", 4 => "Thursday", 5 => "Friday", 6 => "Saturday ", 7 => "Sunday"];

function numberOfToday($arr) {

    $nowDay = date('l');

    foreach($arr as $key => $value) {
        if ($value === $nowDay) {
            return $key;
        }
    }
}

echo "Task 5 result: " . numberOfToday($myWeek) . "\n";
