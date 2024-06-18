<?php
    $servername = "31.11.39.157";
    $username = "Sql1798073";
    $password = "Aruba_0206";
    $dbname = "Sql1798073_2";
// Creo la connessione
    $conn = new mysqli($servername, $username, $password, $dbname);
// Controllo la connessione
    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    
