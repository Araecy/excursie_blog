<link rel="stylesheet" href="style/style.css">

<?php
require_once 'login_check.php';
echo "U bent uiteglogd!<br>";
echo "<a href='toonagenda.php'>OVERZICHT</a>";
session_destroy();

