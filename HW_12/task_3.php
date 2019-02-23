<?php

final class DataBase {

    public $host;
    public $name;
    public $password;

    public function getAccess() {
        echo $this->host;
        echo $this->name;
        echo $this->password;
    }

    private static $instance;

    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}
}

$myDb = DataBase::getInstance();
$myDb->host = '123.12.32.12';
$myDb->name = 'myDB';
$myDb->password = '12345';

$myDb->getAccess();
