<?php
/**
 * Home View
 * 
 * Ini adalah view untuk halaman home.
 * View ini nampilim welcome message dan list users dari database.
 * 
 * Data yang dibutuhin:
 * - $name: string
 * - $users: array of user objects
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?= $name; ?>!</h1>
    <p>This is the home page.</p>
    <h2>Users:</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= $user['name']; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="about"><button>Go to About</button></a>
</body>
</html>
