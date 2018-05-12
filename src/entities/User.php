<?php

class User {

    private $username;
    private $password;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = sha1($password);
        
    }

    public function setPergunta($pergunta)
    {
        $this->pergunta = sha1($pergunta);
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getPergunta()
    {
        return $this->pergunta;
    }

   
   


}