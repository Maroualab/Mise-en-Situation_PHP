<?php
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>

    <form action="" method="get">
        <h1>Register</h1>

        <label for="name">name</label>
        <input type="text" name="name" id="Name">

        <label for="email">Email</label>
        <input type="email" name="email" id="Email">

        <label for="role">   </label>
        
        <select name="role" id="role">
           <option value="" selected>Select a role</option>
           <?php
           include 'getROLE.php';
           foreach ($role as $singlerole) {
               echo "<option value='$singlerole[ID]'>$singlerole[roleName]</option>";
           }?>
           </select>
        <button type="submit" >Save</button>
    </form>

    
 
</body>
</html>
