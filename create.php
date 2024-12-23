<?php 
include 'connect.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

   

    $stmt = $conn->prepare("INSERT INTO users (name , email, role ) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $name,$email , $role_ID );
    $stmt->execute();
    $stmt->close();

    header("Location: index.php");
}