<?php

class Worker {
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getSalary() {
        return $this->salary;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function setSalary($salary) {
        $this->salary = $salary;
    }
}

$workerJack = new Worker('Jack', 25, 1000);

echo $workerJack->getAge() * $workerJack->getSalary();


