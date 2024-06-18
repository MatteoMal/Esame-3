<?php

$server = "31.11.39.157";
$username = "Sql1798073";
$password = "Aruba_0206";
$database = "Sql1798073_2";

// Creo la connessione
$conn = new mysqli($server, $username, $password, $database);

$name = "";
$email = "";
$password = "";
$user_type = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST["name"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $user_type = $_POST["user_type"];

 do {
     if(empty($name) || empty($email) || empty($password) || empty($user_type)) {
        $errorMessage = "All the fields are required";
        break;
     }

     // Aggiungo utente al database
     $sql = "INSERT INTO users (name, email, password, user_type)" . 
            "VALUES ('$name', '$email', '$password', '$user_type')";
            $result = $conn->query($sql);

            if (!$result) {
                $errorMessage = "Invalid query: " . $conn->error;
                break;
            }

     $name = "";
     $email = "";
     $password = "";
     $user_type = "";

     $successMessage = "User added correctly";


 } while (false);
}
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crea utenti</title>
    <link rel="stylesheet" href="css/pagine-crea-backend.css">
    <link href="icons8-engineering-48.png" rel="icon">
</head>
<body>
    <div class="form-container">
        <h2>New User</h2>

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
                <a href="gestione-utenti.php" id="cancel" role="button">Cancel</a>
            </div>
         </div>
        </form>
    </div>
</body>
</html>