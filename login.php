<?php
    $dataName = "gestionusers"; // Database name
    $vPassword = "";            // Database password
    $user = "root";             // Database username
    $Vserver = "localhost";     // Server name

    // Create a connection
    $connex = new mysqli($Vserver, $user, $vPassword, $dataName);

    // Check the connection
    if ($connex->connect_error) {
        die("Erreur de connexion : " . $connex->connect_error);
    }
    ?>