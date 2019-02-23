<?php

abstract class User {

    protected $revenue;

    public abstract function increaseRevenue($revenueIncrement);
}

class Student extends User {

    public function increaseRevenue($revenueIncrement){
        $this->revenue + $revenueIncrement;
        echo $this->revenue;
    }

    public function __construct($revenue) {
        $this->revenue = $revenue;
    }
}

class Employee  extends User {

    public function increaseRevenue($revenueIncrement){
        $this->revenue + $revenueIncrement;
        echo $this->revenue;
    }

    public function __construct($revenue) {
        $this->revenue = $revenue;
    }
}

$student = new Student(500);
$employee = new Employee(1000);

$employee->increaseRevenue(200);
$student->increaseRevenue(100);