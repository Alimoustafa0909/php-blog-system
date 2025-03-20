<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == "admin" && $password == "admin123") {
        $_SESSION['admin'] = true;
        header("Location: index.php");
        exit;
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
</head>
<body>
<h1>Admin Login</h1>
<form method="POST">
    <label for="username">Username: </label>
    <input type="text" name="username" required><br>
    <label for="password">Password: </label>
    <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>
</body>
</html>
