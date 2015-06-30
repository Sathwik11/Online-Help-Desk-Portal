<?php
session_start();

unset($_SESSION['ADMINNAME']);

session_unset();

session_destroy();

header("Refresh: 0; url=http://localhost/HelpDesk/Admin/AdminAuthentication.html");

?>

