<?php

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