<?php

class User {
    private $id;
    private $password;

    public function __construct($id, $password) {
        $this->id = $id;
        $this->password = $password;
    }

    public function getUserData(){
        try {
            if (!is_numeric($this->id)) {
                throw new Exception('id must be a number');
            }
            if (strlen($this->password) > 8) {
                throw new Exception('the password has to be less then 8 symbols');
            }
            return $this->id . $this->password;
        } catch (Exception $exception) {
            echo $exception->getMessage() . '<br>';
            echo 'error line in code: ' . $exception->getLine();
        }
    }
    public function setNewPassword($newPassword){
        $this->password = $newPassword;
    }
    public function setId($id){
        $this->id = $id;
    }
}

$user = new User('sdf', '123456789');
$user->getUserData();