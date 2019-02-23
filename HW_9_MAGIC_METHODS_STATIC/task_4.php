<?php

class Num {
    private static $num1 = 2;
    private static $num2 = 3;

    public function getSumOfSquares(){
        return self::$num1 * self::$num1  + self::$num2 * self::$num2;
    }

}

$newNum = new Num;
echo $newNum->getSumOfSquares();