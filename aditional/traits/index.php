<?php

/*trait Helper {
    private $name;
    private $age;

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}

class User {

    use Helper;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$user = new User('Jack', 30);
echo $user->getAge();
echo $user->getName();*/

/*trait Trait1 {
    private function method(){
        return 1;
    }
}

trait Trait2 {
    private function method(){
        return 2;
    }
}

trait Trait3 {
    private function method2(){
        return 3;
    }
}

class Test {
    use Trait1, Trait2, Trait3 {
        Trait1::method insteadof Trait2, Trait3;
        Trait1::method as public;
        Trait3::method2 as public;
    }

    public function getSum() {
        return $this->method() + $this->method() + $this->method2();
    }
}

$test = new Test();
echo $test->getSum();
echo $test->method();
echo $test->method2();*/

trait Test1 {
    private function test1(){
        return 'test1';
    }
}

trait Test2 {
    private function test2(){
        return 'test2';
    }
}

class MyTest {

    use Test1, Test2;

    public function getStringFrimTraits(){
        $myStr = $this->test1() . $this->test2();
        echo strlen($myStr);
    }

}

$test = new MyTest();
$test->getStringFrimTraits();