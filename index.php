<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="./sendDataToDB.php" method="POST">
  

    <label for="name">name</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="logo">logo</label>
    <input type="text"id="logo" name="logo" required><br><br>


    <label for="description">description</label>
    <input type="text" id="description" name="description" required><br><br>

   

    <input type="submit" name="submit" value="save">
</form>




</html>