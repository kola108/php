<?php

/*----------------Task 0----------------*/

$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];

function maxElement($testArr) {
    $maxValue = 0;

    for ($i=0; $i<count($testArr); $i++) {

        if ($testArr[$i] >= $maxValue) {
            $maxValue = $testArr[$i];
        }
    }

    return $maxValue;
}

echo "task 0 result: \n" . maxElement($myArray) . "\n";

/*----------------Task 1----------------*/

$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];
$maxLimit = 32;

function positiveNumbers($testArr, $limit) {
    $resultArr = [];

    for ($i = 0; $i < count($testArr); $i++) {

        if (
            ($testArr[$i] >= 0) &&
            (($testArr[$i] % 2) === 0) &&
            ($testArr[$i] < $limit)
        ){
            $resultArr[] = $testArr[$i];
        }
    }

   return $resultArr;
}

echo "task 1 result: \n";
print_r(positiveNumbers($myArray, $maxLimit));
echo "\n";

/*----------------Task 2----------------*/

$fibonacciNumber = 20;

function fibonacciSequence($n) {
    $fib = [0, 1];

    for ($i=1; $i < ($n - 1); $i++) {
        $fib[] = $fib[$i] + $fib[$i - 1];
    }

    return $fib;
}

echo "task 2 result: \n";
print_r(fibonacciSequence($fibonacciNumber));
echo "\n";

/*----------------Task 3----------------*/

$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];
$replaceNumber = 40;

function replaceEl ($arr , $value) {
    $resultArr = [];
    $replaceCount = 0;

    for ($i = 0; $i<count($arr); $i++) {

        if ($arr[$i] >= $value) {

            $resultArr[] = $value;
            $replaceCount++;

        } else {
            $resultArr[] = $arr[$i];
        }
    }
    return $result = ["resArr" => $resultArr, "count" => $replaceCount];
}

$replaceResult = replaceEl($myArray, $replaceNumber);
echo "task 3 result: \n";
print_r($replaceResult["resArr"]);
echo "\n" . $replaceResult["count"] . "\n";

/*----------------Task 4----------------*/

$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];

function sumArray ($array) {
    $result = 0;

    for ($i=0; $i<count($array); $i++) {
        $result += $array[$i];
    }
    return $result;
}

$arraySum = sumArray($myArray);
echo "task 4 result: \n $arraySum \n\n";

/*----------------Task 5----------------*/

$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];
$searchValue = 5;

function inArray ($array, $value){
    $result = false;

    for ($i=0; $i<count($array); $i++) {
        if ($array[$i]===$value) {
            $result = true;

        }

    }
    return $result;
}

$arrayIn = inArray($myArray, $searchValue);

if($arrayIn) {
    echo "task 5 result: \n true \n\n";
} else {
    echo "task 5 result: \n false \n\n";
}

/*----------------Task 6----------------*/

$asArray1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "black", "e" => "orange"];
$asArray2 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "pink"];

function arrayDif ($array1, $array2) {
    $resultArr = [];

    foreach ($array1 as $value1) {
        $allowPush = true;

        foreach ($array2 as $value2){

            if ($value1 === $value2) {
                $allowPush = false;
                continue;
            }
        }

        if($allowPush) {
            $resultArr[] = $value1;
        }
    }

    return $resultArr;
}

$difArr = arrayDif($asArray1, $asArray2);
echo "task 6 result:";
print_r($difArr);
echo "\n\n";

/*----------------Task 7----------------*/

$myArray = [12, 5, 78, 4, -32, 1, 34, 45, 0, -12, 234, 45];

function sortArray ($array) {

    for ($i=0; $i<count($array); $i++) {

        for ($k=$i+1; $k<count($array); $k++) {

            if ($array[$i]>$array[$k]) {

                $value = $array[$k];
                $array[$k] = $array[$i];
                $array[$i] = $value;
            }
        }
    }
    return $array;
}

$resultSort = sortArray($myArray);
echo "task 7 result: \n";
print_r($resultSort);
echo "\n\n";

/*----------------Task 8----------------*/

$myString = "abcdefg";

function strPosition($string, $symbol) {
    $strArr = str_split($string);
    $falseVar = false;

    for ($i=0; $i<count($strArr); $i++) {
         if ($strArr[$i] === $symbol) {
             return $i;
         }
    }

    return $falseVar;
}

$strPos = strPosition($myString, "b");
if ($strPos) {
    echo "task 8 result: $strPos \n\n";
} else {
    echo "task 8 result: false \n\n";
}

/*----------------Task 9----------------*/

$myString = "abcdefg";

function subString($string, $number) {
    $strArr = str_split($string);
    $resultArrStr = [];

    if ($number >= 0) {
        for ($i = $number; $i < count($strArr); $i++) {
            $resultArrStr[] = $strArr[$i];
        }
    } else {
        if($number < count($strArr) * (-1)){
            $number = count($strArr) * (-1);
        }
        for ($i = (count($strArr) + $number); $i < count($strArr); $i++) {
            $resultArrStr[] = $strArr[$i];
        }
    }

    $resultStr =  implode($resultArrStr, "");
    return $resultStr;
}

$subString = subString($myString, -20);
echo "task 9 result: $subString \n\n";

/*----------------Task 10----------------*/

$myString = "abcdefg";

function substrCount($string, $symbol) {
    $strArr = str_split($string, 2);
    $count = 0;

    foreach($strArr as $value){
        if($value === $symbol){
            $count++;
        }
    }
    return $count;
}

$substrCount = substrCount($myString, "g");
echo "tesk 10 result: $substrCount \n\n";