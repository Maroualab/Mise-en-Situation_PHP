<?php 

include ('connect.php');

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: ". $row["id"] . "<br>";
    echo "Name: ". $row["name"] . "<br>";
    echo "Email: ". $row["email"] . "<br><br>";
   }
   
 mysqli_close($conn);




