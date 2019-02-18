<?php

class Worker {
    public $name;
    public $age;
    public $salary;
}

$workerJohn = new Worker();

$workerJohn->name = 'John';
$workerJohn->age = 25;
$workerJohn->salary = 1000;

echo "$workerJohn->name $workerJohn->age $workerJohn->salary";

$workerVasja = new Worker();

$workerVasja->name = 'Вася';
$workerVasja->age = 26;
$workerVasja->salary = 2000;

echo "$workerVasja->name $workerVasja->age $workerVasja->salary";