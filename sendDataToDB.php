<?php

include 'connect.php';
include 'formClass.php';

if(isset($_POST['submit'])){


    $name=$_POST['name'];
    $logo=$_POST['logo'];
    $desc=$_POST['desc'];
  
    $form =new FormClass($name,$logo,$desc);
    $form -> getData();

   print_r($form);

}

