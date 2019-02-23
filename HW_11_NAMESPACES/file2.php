<?php

require_once ('file1.php');

class Student extends Users\User {
    public function __construct($age) {
        $this->age = $age;
    }
}

$student = new Student(19);
$student->getAge();