<?php
session_start();


session_unset();


session_destroy();

// redirect back to login page
header("Location: login-db.php");
exit();
?>