<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pagina lavori database</title>
   <link rel="stylesheet" href="css/pagine-backend.css">
   <link href="icons8-engineering-48.png" rel="icon">

</head>
<body>
    <div class="container my-5">
       <h2>List of jobs</h2>
       <a id="nuovo" href="crea-lavori-permessi-utente.php" role="button">New Job</a>
       <a id="torna" href="utente.php" role="button">Torna alla pagina utente</a>
       <br>
       <br>
       <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>JobName</th>
                <th>JobDescription</th>
                <th>JobCategory</th>
                <th>JobImage</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
        
        $server = "31.11.39.157";
        $username = "Sql1798073";
        $password = "Aruba_0206";
        $database = "Sql1798073_2";

        // Creo la connessione
        $conn = new mysqli($server, $username, $password, $database);

        // Controllo la connessione
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Leggo i dati dal database
        $sql = "SELECT * FROM jobs";
        $result = $conn->query($sql);

        if(!$result) {
            die("Invalid query: " . $conn->error);
        }

        // Leggo i dati dalle righe
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[jobName]</td>
                <td>$row[jobDescription]</td>
                <td>$row[jobCategory]</td>
                <td>$row[jobImage]</td>
                <td>
                    <a class='modifica' href='modifica-lavori-permessi-utente.php?id=$row[id]'>Edit</a>
                    <a class='elimina' href='elimina-lavori-permessi-utente.php?id=$row[id]'>Delete</a>
                </td>
            </tr>
            ";
        }
    ?>
        </tbody>
       </table>
    </div>


</body>


</html>