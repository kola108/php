<?php

/*try {
   require "myError.php";
} catch (ParseError $e) {
    echo $e->getMessage();
    echo $e->getFile();
    echo $e->getCode();
    echo $e->getLine();
}*/

/*class User {
    private function getName(){

    }
}

class Student extends User {
    public function __construct()
    {
        try {
            $this->getName();
        } catch (Error $e) {
            echo $e->getMessage();
        }
    }
}

$newStudent = new Student;*/

/*class MyClass {
    final public function func(){
        return 1;
    }
}

class NewClass extends MyClass {
    public function func(){
        return 2;
    }

    public function __construct()
    {
        try {
           parent::func();
        } catch (Error $e) {
            echo $e->getMessage();
        }
    }
}*/

final class Product {
    private static $instance;
    public $a;
    public static function getInstance(){

    }
}