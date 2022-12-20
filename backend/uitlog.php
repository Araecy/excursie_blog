

<?php
require_once 'login_check.php';
echo "U bent uiteglogd!<br>";
echo "<a href='../frontend/index.php'>OVERZICHT</a>";
session_destroy();

