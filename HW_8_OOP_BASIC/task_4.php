<?php

class User {
    protected $name;
    protected $age;

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getAge() {
        return $this->age;
    }
    public function setAge($age) {
        $this->age = $age;
    }
}

class Worker extends User {
    private $salary;

    public function getSalary() {
        return $this->salary;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
}

class Student extends User {
    private $scholarship;
    private $course;

    public function getScholarship(){
        return $this->scholarship;
    }
    public function setScholarship($scholarship){
        $this->scholarship = $scholarship;
    }
    public function getCourse(){
        return $this->scholarship;
    }
    public function setCourse($course){
        $this->course = $course;
    }
}

$workerIavn = new Worker();
$workerIavn->setName('ivan');
$workerIavn->setAge(25);
$workerIavn->setSalary(1000);

$workerAlex = new Worker();
$workerAlex->setName('Alex');
$workerAlex->setAge(26);
$workerAlex->setSalary(2000);

echo $workerIavn->getSalary() + $workerAlex->getSalary();