<?php
// Uključivanje konekcije na bazu podataka
include 'db.php';

// Uzimanje post_id iz URL parametra
$post_id = $_GET['post_id'];

$deleteCommentsSql = "DELETE FROM comments WHERE post_id = :post_id";
$commentsStatement = $connection->prepare($deleteCommentsSql);
$commentsStatement->bindParam(':post_id', $post_id, PDO::PARAM_INT);


// SQL upit za brisanje posta
$sql = "DELETE FROM posts WHERE id = :post_id";
$stmt = $connection->prepare($sql);
$stmt->bindParam(':post_id', $post_id, PDO::PARAM_INT);

//Prvo birsemo komentare
if ($commentsStatement->execute()) {
    if ($stmt->execute()) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting the post.";
    }
}
?>