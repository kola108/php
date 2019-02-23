<?php

namespace Users {
    class User {
        protected $name;
        protected $surname;
        protected $age;
        public function getAge(){
            echo $this->age;
        }
    }
}