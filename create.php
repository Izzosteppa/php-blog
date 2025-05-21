<?php include 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->execute([$_POST['title'], $_POST['content']]);
    header("Location: index.php");
}
?>
<form method="post">
    Title: <input name="title"><br>
    Content: <textarea name="content"></textarea><br>
    <button type="submit">Post</button>
</form>
