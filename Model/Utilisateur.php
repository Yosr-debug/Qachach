<?php
class utilisateur {
    private $email;
    private $password;

    public function __construct(string $email ,string $password){
        $this->email=$email;
        $this->password=$password;
    }
    public function getemail(){
        return $this->email;
    }
    public function getpassword(){
        return $this->password;
    }

}