<?php
session_start();  // Start the session
session_destroy();  // Destroy the session to log out
header("Location: index.php");  // Redirect to the index page (or login page)
?>
