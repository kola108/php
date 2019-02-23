<?php

interface Figure {
    const PI = 3.14;

    public function getArea();
    public function getPerimeter();
    public function setRadius($radius);
    public function setDiameter();
}

interface Circle {
    public function getRadius();
    public function getDiameter();
}

class Disc implements Figure, Circle {
    private $radius;
    private $diameter;

    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function setDiameter(){
        $this->diameter = $this->radius * 2;
    }
    public function getPerimeter(){
        if(isset($this->radius)){
            echo 2 * self::PI * $this->radius;
        } else {
            echo 'please set the radius';
        }
    }
    public function getArea(){
        if(isset($this->radius)){
            echo (4/3) * self::PI * $this->radius * $this->radius * $this->radius;
        } else {
            echo 'please set the radius';
        }
    }
    public function getRadius(){
        echo $this->radius;
    }
    public function getDiameter(){
        echo $this->diameter;
    }
}

$disk = new Disc();
$disk->setRadius(10);
$disk->getArea();
$disk->setDiameter();
$disk->getDiameter();