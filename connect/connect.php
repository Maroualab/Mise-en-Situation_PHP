

<?php

$db_user="root";
$db_server="localhost";
$db_pass="";
$db_name="web_resources_db";


try {
    $pdo = new PDO("mysql:host=localhost;dbname=web_resources_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

