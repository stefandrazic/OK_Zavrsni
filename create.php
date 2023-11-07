<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];


    $sql = "INSERT INTO posts (title, body, author, created_at) VALUES (:title, :body, :author, NOW())";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':body', $body, PDO::PARAM_STR);
    $stmt->bindParam(':author', $author, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header('Location: index.php');
        exit;
    } else {
        $error_message = "Došlo je do greške pri dodavanju posta u bazu podataka.";
    }
}
