<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
<?php
 include 'login.php';

// SQL query to select all rows from the 'users' table
$reqt = "SELECT * FROM users";

// Execute the query
$rest = $connex->query($reqt);

// Check if the query returned any rows
if ($rest && $rest->num_rows > 0) {
   
    echo '<h1> gestion utilisateur </h1>';
   
    echo "<table>";
    
    echo "<thead>
            <tr>
            
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
               
                
                
            </tr>
          </thead>";
   
    
    // Fetch each row and display it in the table
    while ($row = $rest->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
     
        
       
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "LA TABLE EST VIDE";
}

// Close the connection
$connex->close();
?>

</body>
</html>