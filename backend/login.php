<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'config.php';

?>
<h2>Log nu in</h2>
<form method="post" action="inlogverwerk.php">
            <div>
                <label for="inputusername">username</label>
                <input type="text" name="inputusername">
               
            </div>
            <div>
                <label for="inputpassword">password</label>
                <input type="password" name="inputpassword">
                
            </div>
            <div>
                <input type="submit">
            </div>
        </form>
        <p>
            Geen Account log dan nu in! <a href="registreren.php">Klik Hier!</a>
        </p>