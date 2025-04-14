<?php

//for the admin privilege for the edit and delete button we put an session for the admin !!
session_start();
require '../config/database.php';

$query = $pdo->query('SELECT * FROM posts ORDER BY id DESC');
$posts = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog System</title>
</head>
<body>
<h1>All Blog Postss</h1>
<a href="create.php">Create a New Post</a>
<ul>
    <?php foreach ($posts as $post): ?>
        <li>

            <a href="show.php?id=<?= $post['id']; ?>" style="margin-right: 20px;"><?php echo $post['title'] ?></a>

            <?php if (isset($_SESSION['admin'])): ?>
                <a href="edit.php?id=<?= $post['id']; ?>" style="margin-left: 10px;">Edit</a>
                <a href="delete.php?id=<?= $post['id']; ?>" style="margin-left: 10px;">Delete</a>
            <?php endif ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php if (!isset($_SESSION['admin'])): ?>
    <p><a href="../auth/login.php">Login as Admin</a></p>
<?php endif; ?>

<?php if (isset($_SESSION['admin'])): ?>
    <a href="../auth/logout.php">Logout</a>
<?php endif; ?>
</body>
</html>


<?php //foreach ($posts as $post): ?>
<!--<li>-->
<!--    <a-->
<!--</li>-->

