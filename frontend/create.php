<?php 

require_once '../backend/login_check.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Excursieblog</title>
</head>
<body>
    <img id="logo" src="images/logo.png" alt="">
    <div id="links">
    
        <a href="index.php">Home</a>
        <a href="create.php">Create blog</a>
        <a href="browse.php">Browse blogs</a>

        <a href="../backend/login.php">Login</a>
        <a href="../backend/uitlog.php">Uitlog</a>
        <a href="../backend/registreren.php">Register</a>
    </div>
    <hr />
    <div id="body-container">
    <form action="../backend/createverwerk.php" method="post" enctype="multipart/form-data">
            <label for="">Title: </label></br>
            <input type="text" name="title" id="title"></br>

            <label for="">Content: </label></br>
            <input type="text" name="content" id="content"></br>

            <label for="">Image: </label></br>
            <input type="file" name="image" id="image"></br>

            <input type="submit">
        </form>


    </div>
    <footer>

    </footer>
</body>
</html>