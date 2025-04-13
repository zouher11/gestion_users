<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
</head>
<body>
    <h2>Insert User</h2>
    <form action="" method="POST">
        <label for="name">Numero de ticket:</label>
        <input type="text" id="numtic" name="numtic" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label >status:</label>
        <input type="text" id="" name="state" required><br><br>

        <label for="email">password:</label>
        <input type="password" id="" name="passe" required><br><br>

        <button type="submit">add user</button>
    </form>

    <?php
    include 'login.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $Nname = $_POST['nom'];
        $Nemail = $_POST['email'];
        $Nstate = $_POST['state'];
        $Npass = $_POST['passe'];

        if (!empty($Nname) && !empty($Nemail)) {
            // Use a prepared statement to securely insert data
             $connex->query("INSERT INTO users (nom, email,satat,passwoord) VALUES ('$Nname','$Nemail','$Nstate' , '$Npass')");
             header("Location: listes.php");
                exit();

        
        } else {
            echo "<p>Please fill in all fields.</p>";
        }
    }
    ?>
</body>
</html>
