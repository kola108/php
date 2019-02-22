<?php

class User {
    public $name;
    public static $count = 0;

    public function __construct($name)
    {
        $this -> name = $name;
        echo ( ++self::$count );
    }
};