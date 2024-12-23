<?php 
include 'connect.php';

    $query = "
    SELECT ID , name roleName
    FROM role;
    ";
    $result = $conn->query($query);
    $role = [];
    while ($row = $result->fetch_assoc()) {
        $role[] = $row;
    }







