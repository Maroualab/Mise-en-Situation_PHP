<?php

include '../connect/connect.php';

class FormClass{

    private $pdo;
    public $name;
    public $logo;
    public $desc;

    public function __construct($name,$logo,$desc){
            $this->name=$name;
            $this->logo=$logo;
            $this->desc=$desc;
    }

    
    public function getData(){
        
        $sql="SELECT name,logo,description FROM web_resources";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
     

    }

}