<?php
include 'login.php';

// Get the user ID from the URL
$id = $_GET['id'];

// Delete the user
$stmt = $connex->prepare("DELETE FROM users WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: listes.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}
?>
