<?php

class User {
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday) {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->calculateAge($birthday);
    }

    public function getName() {
        return $this->name;
    }
    public function getSureName() {
        return $this->surname;
    }
    public function getBirthday() {
        return $this->birthday;
    }
    public function getAge() {
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
        return $this;
    }
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
    private function calculateAge($birthday) {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }
        $this->age = $age;
    }

    public function __toString(){
        return $this->name;
    }

}

$vasja = new User('VasilOk', 'Ivanovich', '2000-01-01');

echo $vasja->getAge(). "\n";
$vasja->age = 32;
echo $vasja->name. "\n";
echo $vasja->getAge(). "\n";
;

