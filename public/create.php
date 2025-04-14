<?php
require '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if ($title && $content) {
        $stmt = $pdo->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
        $stmt->execute([$title, $content]);
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New Post</title>
</head>
<body>
<h1>Create a New Post</h1>
<form method="POST">
    <input type="text" name="title" placeholder="Title" required>
    <input name="content" placeholder="Content" required></input>
    <button type="submit">Submit</button>
</form>
</body>
</html>
