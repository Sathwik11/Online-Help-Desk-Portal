<?php
session_start();

unset($_SESSION['USERNAME']);

session_unset();

session_destroy();

header("Refresh: 0; url=http://localhost/HelpDesk/User/Login.html");

?>
