<?php
    // ========== LOCAL ==============
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "safariexchange"; 

    // ========== PRODUCTION ==============
    // $servername = "localhost"; 
    // $username = "id21049258_goliath"; 
    // $password = "Goliath0904@"; 
    // $dbname = "id21049258_safariexchange"; 

    // Connexion à la base de données
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Erreur de connexion à la base de données : " . $conn->connect_error);
    }

?>
