<?php
include 'login.php';

// Get the user ID from the URL
$id = $_GET['id'];

// Fetch the user details
$result = $connex->query("SELECT * FROM users WHERE id = $id");
$user = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $status = $_POST['state'];
    $pass = $_POST['passew'];

    if (!empty($nom) && !empty($email)&& !empty($status) && !empty($pass)) {
        // Update the user's details
         $connex->query("UPDATE users SET nom = '$nom', email = '$email' , satat = '$status' , passwoord = '$pass' WHERE id = '$id'");

            header("Location: listes.php");
            exit();
        
    } else {
        echo "Please fill in all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="POST">
        <label for="nom">Name:</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($user['nom']); ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']); ?>" required><br><br>

        <label for="">status:</label>
        <input type="text" id="" name="state" value="<?= htmlspecialchars($user['satat']); ?>" required><br><br>

        <label for="">password:</label>
        <input type="password" id="" name="passew" value="<?= htmlspecialchars($user['passwoord']); ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
