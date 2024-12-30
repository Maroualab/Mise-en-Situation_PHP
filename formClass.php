<?php

include 'sendDataToDB.php';

class FormClass{

    protected $name;

    protected $email;

    protected $password;

    public function __construct($name,$email,$password){
            $this->name = $name;
            $this->email =$email;
            $this ->password =$password;
    }

    public function getName(){
        return $this -> name;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function getPassword(){
        return $this -> password;
    }

    public function insert(){

        global $pdo;
        
    
        $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (:name, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            "name" => $this ->getName(),
            "email" => $this ->getEmail(),
            "password"=>$this ->getPassword()]);
    }
    
}


