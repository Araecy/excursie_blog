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
        <a href="">Create blog</a>
        <a href="">Browse blogs</a>

        <a href="../backend/login.php">Login</a>
        <a href="#">Register</a>
    </div>
    <hr />
    <div id="body-container">
        <form action="../backend/createverwerk.php" method="post">
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