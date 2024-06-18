<?php

@include 'config.php';
require "public-functions.php";
use MieClassi\Utility as UT;

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'Admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin.php');

      }elseif($row['user_type'] == 'User'){

         $_SESSION['user_name'] = $row['name'];
         header('location:utente.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="icons8-engineering-48.png" rel="icon">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?><?php 
      $mail = UT::richiestaHTTP("email");
      $password = UT::richiestaHTTP("password");
      ?>
      <input type="email" name="email" required value="<?php echo $mail; ?>" placeholder="enter your email">
      <input type="password" name="password" required value="<?php echo $password; ?>" placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
   </form>

</div>

</body>
</html>