<?php

class Num {
    private static $num1 = 1;
    private static $num2 = 2;

    public function getSum(){
        return self::$num1 + self::$num2;
    }

}

$newNum = new Num;
echo $newNum->getSum();