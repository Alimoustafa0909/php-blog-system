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
    die("Post not found. <a href='index.php'>Back to home </a>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $post['title']; ?></title>
</head>
<body>
<h1><?php echo $post['title']; ?></h1>
<p><?php echo ($post['content']); ?></p>
<a href="index.php">Back to Home</a>
</body>
</html>
