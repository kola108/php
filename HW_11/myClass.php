<?php

namespace DataBase {

    class DB{
        private $db_name;
        private $host;

        public function __construct($db_name, $host) {
            $this->db_name = $db_name;
            $this->host = $host;
        }

        public function getName(){
            echo $this->db_name . $this->host;
        }
    }

}