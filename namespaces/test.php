<?php

namespace Project {

    const CONNECT_OK = 1;
    class Connection
    {
        public $connection = 'connect1';
    }

    function connection()
    {
        echo 'project connect1';
    }
}

namespace AnotherProject {

    const CONNECT_OK = 2;
    class Connection
    {
        public $connection = 'connect2';
    }

    function connection()
    {
        echo 'project connect2';
    }

    function showNameSpace() {
        echo __NAMESPACE__;
    }
}

namespace {
    echo 'test string';
}


