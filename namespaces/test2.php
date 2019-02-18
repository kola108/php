<?php

namespace Db {

    interface DataBase {
        public function getConnection();
        public function setConnection($connection);
    }

    echo __NAMESPACE__ . "<br>";

    class Table implements DataBase{
        private $name;
        private $type;
        private $size;
        private $connection = 'connected';

        public function __construct($name, $type, $size) {
            $this->name = $name;
            $this->type = $type;
            $this->size = $size;
        }
        public function getName() {
            return $this->name;
        }
        public function getTableParams() {
            $params = [];
            $params['type'] = $this->type;
            $params['size'] = $this->size;
            return $params;
        }
        public function getConnection() {
            return $this->connection;
        }
        public function setConnection($connection) {
            $this->connection = $connection;
        }
    }

}

namespace Db2 {

    echo __NAMESPACE__ . "<br>";

    class Table2 extends \Db\Table {}
}
