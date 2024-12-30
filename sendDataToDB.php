<?php

include 'connect.php';
include 'formClass.php';

if(isset($_POST['submit'])){


    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $form = new FormClass($name,$email,$password);

    
    
}

