<?php

$server = "31.11.39.157";
$username = "Sql1798073";
$password = "Aruba_0206";
$database = "Sql1798073_2";

// Creo la connessione
$conn = new mysqli($server, $username, $password, $database);


$id = "";
$jobName = "";
$jobDescription = "";
$jobCategory = "";
$jobImage = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Metodo GET: Mostro i dati del servizio

    if (!isset($_GET["id"])) {
        header("location:servizi2.php");
        exit;
    }

    $id = $_GET["id"];

    // Leggo i dati del servizio selezionato dalla table del database
    $sql = "SELECT * FROM services WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:servizi2.php");
        
    }

    $id = $row["id"];
    $serviceName = $row["serviceName"];
    $serviceDescription = $row["serviceDescription"];
    $serviceDescription2 = $row["serviceDescription2"];
    $serviceImage = $row["serviceImage"];
} else {
    // Metodo POST: Modifico i dati del servizio

    $id = $_POST["id"];
    $serviceName = $_POST["serviceName"];
    $serviceDescription = $_POST["serviceDescription"];
    $serviceDescription2 = $_POST["serviceDescription2"];
    $serviceImage = $_POST["serviceImage"];

    do {
        if( empty($serviceName) || empty($serviceDescription) || empty($serviceDescription2) || empty($serviceImage)) {
            $errorMessage = "All the fields are required";
            break;
         }

         $sql = "UPDATE services " .
                "SET serviceName = '$serviceName', serviceDescription = '$serviceDescription', serviceDescription2 = '$serviceDescription2', serviceImage = '$serviceImage' " .
                "WHERE id = $id";

        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }

        $successMessage = "Service updated correctly";

        


    } while (false);
}
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica servizi</title>
    <link rel="stylesheet" href="css/pagine-modifica-backend.css">
    <link href="icons8-engineering-48.png" rel="icon">
</head>
<body>
    <div class="form-container">
        <h2>Edit Service</h2>

        <?php
         if(!empty($errorMessage)) {
            echo "
            <divrole='alert'>
            <strong class='error-msg'>$errorMessage</strong>
            <button class='alert alert-warning alert-dismissible fade show' type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
         }
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
         <div class="row mb-3">
            <label>ServiceName</label>
            <div>
                <input type="text" name="serviceName" value="<?php echo $serviceName; ?>">
            </div>
         </div>
         <div>
            <label>ServiceDescription</label>
            <div>
                <input type="text" name="serviceDescription" value="<?php echo $serviceDescription; ?>">
            </div>
         </div>
         <div>
            <label>ServiceDescription2</label>
            <div>
                <input type="text" name="serviceDescription2" value="<?php echo $serviceDescription2; ?>">
            </div>
         </div>
         <div>
            <label>ServiceImage</label>
            <div>
                <input type="text" name="serviceImage" value="<?php echo $serviceImage; ?>">
            </div>
         </div>


         <?php
         if(!empty($successMessage)) {
            echo "
            <div>
            <div>
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>$successMessage</strong>
            <button type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            </div>
            </div>
            ";
         }
         ?>
         <div>
            <div>
                <button type="submit" class="form-btn">Submit</button>
            </div>
            <br>
            <div class="col-sm-3 d-grid">
                <a href="gestione-servizi.php" id="cancel" role="button">Cancel</a>
            </div>
         </div>
        </form>
    </div>
</body>
</html>