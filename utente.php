<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:form-login.php');
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Pagina utente</title>
   <link rel="stylesheet" href="css/admin.css">
   <link rel="stylesheet" href="css/style.css">
   <link href="icons8-engineering-48.png" rel="icon">

</head>
<body>
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<a href='gestione-lavori-permessi-utente.php' id='lavori' title='Gestisci i lavori'>Gestisci lavori</a>
<a href='gestione-servizi-permessi-utente.php' id='servizi' title='Gestisci i servizi'>Gestisci servizi</a>
<div class="container">

   <div class="content">
      <h3>Ciao, <span>utente</span></h3>
      <h1>Benvenuto/a <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>questa è una pagina utente</p>
      <a href="form-login.php" class="btn">effettua il login</a>
      <a href="logout.php" class="btn">effettua il logout</a>
   </div>

</div>

</body>
</html>