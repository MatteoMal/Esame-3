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
    // Metodo GET: Mostro i dati del lavoro

    if (!isset($_GET["id"])) {
        header("location:lavori2.php");
        exit;
    }

    $id = $_GET["id"];

    // Leggo i dati del lavoro selezionato dalla table del database
    $sql = "SELECT * FROM jobs WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:lavori2.php");
        
    }

    $id = $row["id"];
    $jobName = $row["jobName"];
    $jobDescription = $row["jobDescription"];
    $jobCategory = $row["jobCategory"];
    $jobImage = $row["jobImage"];
} else {
    // Metodo POST: Modifico i dati del lavoro

    $id = $_POST["id"];
    $jobName = $_POST["jobName"];
    $jobDescription = $_POST["jobDescription"];
    $jobCategory = $_POST["jobCategory"];
    $jobImage = $_POST["jobImage"];

    do {
        if( empty($jobName) || empty($jobDescription) || empty($jobCategory) || empty($jobImage)) {
            $errorMessage = "All the fields are required";
            break;
         }

         $sql = "UPDATE jobs " .
                "SET jobName = '$jobName', jobDescription = '$jobDescription', jobCategory = '$jobCategory', jobImage = '$jobImage' " .
                "WHERE id = $id";

        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }

        $successMessage = "Job updated correctly";

        


    } while (false);
}
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica lavori</title>
    <link rel="stylesheet" href="css/pagine-modifica-backend.css">
    <link href="icons8-engineering-48.png" rel="icon">
</head>
<body>
    <div class="form-container">
        <h2>Edit Job</h2>

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
            <label>JobName</label>
            <div>
                <input type="text" name="jobName" value="<?php echo $jobName; ?>">
            </div>
         </div>
         <div>
            <label>JobDescription</label>
            <div>
                <input type="text" name="jobDescription" value="<?php echo $jobDescription; ?>">
            </div>
         </div>
         <div>
            <label>JobCategory</label>
            <div>
                <input type="text" name="jobCategory" value="<?php echo $jobCategory; ?>">
            </div>
         </div>
         <div>
            <label>JobImage</label>
            <div>
                <input type="text" name="jobImage" value="<?php echo $jobImage; ?>">
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
                <a href="gestione-lavori.php" id="cancel" role="button">Cancel</a>
            </div>
         </div>
        </form>
    </div>
</body>
</html>