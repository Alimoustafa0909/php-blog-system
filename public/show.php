<?php
require '../config/database.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Invalid post ID.");
}

$query = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$query->execute([$id]);
$post = $query->fetch(PDO::FETCH_ASSOC);

if (!$post) {
    die("Post not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= htmlspecialchars($post['title']); ?></title>
</head>
<body>
<h1><?= htmlspecialchars($post['title']); ?></h1>
<p><?= nl2br(htmlspecialchars($post['content'])); ?></p>
<a href="index.php">Back to Home</a>
</body>
</html>
