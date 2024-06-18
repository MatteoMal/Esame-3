<?php

$server = "31.11.39.157";
$username = "Sql1798073";
$password = "Aruba_0206";
$database = "Sql1798073_2";

// Creo la connessione
$conn = new mysqli($server, $username, $password, $database);


$id = "";
$name = "";
$email = "";
$password = "";
$user_type = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Metodo GET: Mostro i dati dell'utente

    if (!isset($_GET["id"])) {
        header("location:utenti.php");
        exit;
    }

    $id = $_GET["id"];

    // Leggo i dati dell'utente selezionato dalla table del database
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if (!$row) {
        header("location:utenti.php");
        
    }

    $name = $row["name"];
    $email = $row["email"];
    $password = $row["password"];
    $user_type = $row["user_type"];
} else {
    // Metodo POST: Modifico i dati dell'utente

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user_type = $_POST["user_type"];

    do {
        if( empty($name) || empty($email) || empty($password) || empty($user_type)) {
            $errorMessage = "All the fields are required";
            break;
         }

         $sql = "UPDATE users " .
                "SET name = '$name', email = '$email', password = '$password', user_type = '$user_type' " .
                "WHERE id = $id";

        $result = $conn->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }

        $successMessage = "User updated correctly";

        


    } while (false);
}
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica utenti</title>
    <link rel="stylesheet" href="css/pagine-modifica-backend.css">
    <link href="icons8-engineering-48.png" rel="icon">
</head>
<body>
    <div class="form-container">
        <h2>Edit User</h2>

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
            <label>Name</label>
            <div>
                <input type="text" name="name" value="<?php echo $name; ?>">
            </div>
         </div>
         <div>
            <label>Email</label>
            <div>
                <input type="text" name="email" value="<?php echo $email; ?>">
            </div>
         </div>
         <div>
            <label>Password</label>
            <div>
                <input type="text" name="password" value="<?php echo $password; ?>">
            </div>
         </div>
         <div>
            <label>User_type</label>
            <div>
                <input type="text" name="user_type" value="<?php echo $user_type; ?>">
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
                <a href="gestione-utenti.php" id="cancel" role="button">Cancel</a>
            </div>
         </div>
        </form>
    </div>
</body>
</html>