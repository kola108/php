<?php

class Session {
    public function __construct() {
        session_start();
    }

    public function createSessionVar($sessionVar) {
        $_SESSION['sessionVar'] = $sessionVar;
    }
    public function getSessionVar() {
        return $_SESSION['sessionVar'];
    }
    public function deleteSessionVar() {
        unset($_SESSION['sessionVar']);
    }

    public function __destruct() {
        session_destroy();
    }
}