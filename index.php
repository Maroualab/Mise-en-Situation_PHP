<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="sendDataToDB.php" method="POST">
  

    <label for="name">Nom du Titulaire:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email</label>
    <input type="email"id="email" name="email" required><br><br>


    <label for="password">password</label>
    <input type="password" id="password" name="password" required><br><br>


    <input type="submit" name="submit" value="Ajouter">
</form>




</html>