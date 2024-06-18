<?php

$server = "31.11.39.157";
$username = "Sql1798073";
$password = "Aruba_0206";
$database = "Sql1798073_2";

// Creo la connessione
$conn = new mysqli($server, $username, $password, $database);

$serviceName = "";
$serviceDescription = "";
$serviceDescription2 = "";
$serviceImage = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $serviceName = $_POST["serviceName"];
 $serviceDescription = $_POST["serviceDescription"];
 $serviceDescription2 = $_POST["serviceDescription2"];
 $serviceImage = $_POST["serviceImage"];

 do {
     if(empty($serviceName) || empty($serviceDescription) || empty($serviceDescription2) || empty($serviceImage)) {
        $errorMessage = "All the fields are required";
        break;
     }

     // Aggiungo servizio al database
     $sql = "INSERT INTO services (serviceName, serviceDescription, serviceDescription2, serviceImage)" . 
            "VALUES ('$serviceName', '$serviceDescription', '$serviceDescription2', '$serviceImage')";
            $result = $conn->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query: " . $conn->error;
                break;
            }

     $serviceName = "";
     $serviceDescription = "";
     $serviceDescription2 = "";
     $serviceImage = "";

     $successMessage = "Service added correctly";


 } while (false);
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea servizi</title>
    <link rel="stylesheet" href="css/pagine-crea-backend.css">
    <link href="icons8-engineering-48.png" rel="icon">
</head>
<body>
    <div class="form-container">
        <h2>New Service</h2>

        <?php
         if(!empty($errorMessage)) {
            echo "
            <div role='alert'>
            <strong class='error-msg'>$errorMessage</strong>
            <button type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
         }
        ?>
        <form method="post">
         <div>
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
            <div role='alert'>
            <strong>$successMessage</strong>
            <button type='button' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            </div>
            </div>
            ";
         }
         ?>
         <div>
            <br>
            <div>
                <button id="submit" type="submit" class="form-btn">Submit</button>
            </div>
            <br>
            <div>
                <a href="gestione-servizi.php" id="cancel" role="button">Cancel</a>
            </div>
         </div>
        </form>
    </div>
</body>
</html>