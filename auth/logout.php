<?php
session_start();  // continue not starting it  the session
session_destroy(); // iam destroying the session here when the admin logout
header("Location: index.php");
?>
