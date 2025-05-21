<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="styles.css"></head>
<body>
<h1>My Blog</h1>
<a href="create.php">New Post</a>
<?php
foreach ($conn->query("SELECT * FROM posts ORDER BY created_at DESC") as $row) {
    echo "<h2><a href='post.php?id={$row['id']}'>{$row['title']}</a></h2>";
}
?>
</body>
</html>
