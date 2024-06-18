<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $server = "31.11.39.157";
    $username = "Sql1798073";
    $password = "Aruba_0206";
    $database = "Sql1798073_2";

  // Creo la connessione
 $conn = new mysqli($server, $username, $password, $database);

 $sql = "DELETE FROM users WHERE id=$id";
 $conn->query($sql);
}

header("location:gestione-utenti.php");

?>