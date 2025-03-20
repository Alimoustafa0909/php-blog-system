<?php
session_start();
require '../config/database.php';

if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header("Location: login.php");  // Redirect to login if not an admin
    exit;
}

$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: ../index.php");  // Redirect to the blog listing page after deletion
exit;
?>
