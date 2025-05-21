<?php include 'db.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();
?>
<h1><?= $post['title'] ?></h1>
<p><?= nl2br($post['content']) ?></p>
