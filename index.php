<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>login </h2>
    <form action="" method="POST">
        <label for="name">email:</label>
        <input type="email" id="mail" name="mail" required><br><br>

        <label for="email">mot de pass:</label>
        <input type="passwordf" id="pass" name="pass" required><br><br>

        <button type="submit">connexion</button>
    </form>
    
</body>
</html>
<?php
include 'login.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $emaill = $_POST['mail'];
    $passw = $_POST['pass'];
    $rest =  $connex->query("select * from users  WHERE email= '$emaill' and passwoord= '$passw'");
    if ($rest ->num_rows > 0) {
        $row = $rest ->fetch_assoc() ;
        if ($row['satat']=="user"){
            header("Location: listeuser.php");
        }
        else{
            header("Location: listeAdmin.php");
        }
        exit();
        }
        
    else {
        echo("email or password is incorect");
    }
}  

   

    


?>