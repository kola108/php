<?php

abstract class Figure {
    protected $a;
    protected $b;
    public abstract function calculateAreaOfRectangle();
}

class Rectangle extends Figure {

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
        $this->calculateAreaOfRectangle();
    }

    public function calculateAreaOfRectangle(){
        echo $this->a * $this->b;
    }
}

$rectangle = new Rectangle(100,200);