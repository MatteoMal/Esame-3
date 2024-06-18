<?php

$server = "31.11.39.157";
$username = "Sql1798073";
$password = "Aruba_0206";
$database = "Sql1798073_2";

// Creo la connessione
$conn = new mysqli($server, $username, $password, $database);

$jobName = "";
$jobDescription = "";
$jobCategory = "";
$jobImage = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $jobName = $_POST["jobName"];
 $jobDescription = $_POST["jobDescription"];
 $jobCategory = $_POST["jobCategory"];
 $jobImage = $_POST["jobImage"];

 do {
     if(empty($jobName) || empty($jobDescription) || empty($jobCategory) || empty($jobImage)) {
        $errorMessage = "All the fields are required";
        break;
     }

     // Aggiungo lavoro al database
     $sql = "INSERT INTO jobs (jobName, jobDescription, jobCategory, jobImage)" . 
            "VALUES ('$jobName', '$jobDescription', '$jobCategory', '$jobImage')";
            $result = $conn->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query: " . $conn->error;
                break;
            }

     $jobName = "";
     $jobDescription = "";
     $jobCategory = "";
     $jobImage = "";

     $successMessage = "Job added correctly";


 } while (false);
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea lavori</title>
    <link rel="stylesheet" href="css/pagine-crea-backend.css">
    <link href="icons8-engineering-48.png" rel="icon">
</head>
<body>
    <div class="form-container">
        <h2>New Job</h2>

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
                <a href="gestione-lavori-permessi-utente.php" id="cancel" role="button">Cancel</a>
            </div>
         </div>
        </form>
    </div>
</body>
</html>