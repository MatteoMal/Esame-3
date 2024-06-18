<?php

/**
 * Pagina contenente descrizione e spiegazione del lavoro singolo sviluppato
*/
$titolo = "Full-stack developer";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$datalavoro = "11/10/2023";
$timestamp = strtotime($datalavoro);
$data = date("d-m-Y", $timestamp);
$descrizione = "Lavoro attualmente come <br> full-stack developer, <br> un lavoro che <br> richiede molta dedizione <br> e a cui sono sempre stato portato, <br> essendo nato <br> nell'era digitale <br> e praticamente cresciuto <br> scrivendo codici. <br><br><br> Questo lavoro mi ha divertito <br> fin dall'inizio: <br> ho scritto codici, <br> designato siti per aziende <br> molto importanti come la Apple, <br> azienda a cui sono <br> sempre stato legato, <br> essendo loro <br> cliente da tempo ormai grazie <br> all'acquisto di iPhone e iPad. <br><br><br> Lo consiglio come lavoro? <br> Assolutamente sì, <br> è un'esperienza unica e, <br> se ci siete portati <br> e vi piace scrivere codici, <br> questa è decisamente <br> la via migliore da prendere. <br><br><br> Se avete questo dono, <br> non lasciatevi scappare <br> quest'opportunità, <br> poiché è un lavoro <br> ben retribuito e, <br> se saprete dargli il giusto tempo, <br> impegnandovi come non mai, <br> vi saprà soddisfare.";
$img = "https://i0.wp.com/otero.edu/wp-content/uploads/2023/10/full-stack-developer-ges375.jpg?resize=768%2C384&ssl=1";
function elenco() {
    echo("<h2 id='elenco'>Un elenco di lavori che potrebbero interessarvi che concernono sempre questo settore:</h2>

    <ul>
     <li>Front-end developer</li>
     <li>Back-end developer</li>
     <li>Web designer</li>
     <li>Sviluppatore di software</li>



    </ul>


    <hr>
 <br>
 <br>
 <br>");
}
require("funzioni.php");
?>

<!DOCTYPE html>
<html lang="it">


<head>
<script>
var _iub = _iub || [];
_iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"enableFadp":true,"enableLgpd":true,"enableUspr":true,"fadpApplies":true,"floatingPreferencesButtonDisplay":"bottom-right","perPurposeConsent":true,"siteId":3659477,"usprApplies":true,"whitelabel":false,"cookiePolicyId":39384690,"lang":"it", "banner":{ "acceptButtonDisplay":true,"closeButtonDisplay":false,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"ownerName":"www.sitodimatteo.cloud","position":"float-top-center","rejectButtonDisplay":true,"showTitle":false,"showTotalNumberOfProviders":true }};
</script>
<script src="https://cs.iubenda.com/autoblocking/3659477.js"></script>
<script src="//cdn.iubenda.com/cs/gpp/stub.js"></script>
<script src="//cdn.iubenda.com/cs/iubenda_cs.js" async></script>
    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/descrizione-lavoro-singolo.min.css" type="text/css" rel="stylesheet">
    <link href="icons8-engineering-48.png" rel="icon">




    <script> function validateForm() {
  // Get form fields
  const nome = document.getElementById("ilTuoNome");
  const cognome = document.getElementById("ilTuoCognome");
  const email = document.getElementById("laTuaEmail");
  const richiesta = document.getElementById("laTuaRichiesta");
  // Validate fields
  if (nome.value !== "" && cognome.value !== "" && email.value !== "" && richiesta.value !== "") {
    alert("I campi sono validi, inviando il form...");
    // Code to submit form...
  } else {
    alert("Per favore riempi tutti i campi.");
    event.preventDefault();
    // Code to prevent form submission...
  }
}
</script>
</head>
<body>
 <!--Descrizione singolo lavoro + immagine-->
 <a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
 <div id="nav"><b><?php link1() ?></b></div>
 <h1 id="esperienza">La mia <br> esperienza come <br> full-stack <br> developer</h1>
 <p id="data"><?php echo $data ?>, Roma</p>
 <p id="descrizione"><?php echo $descrizione ?></p>
 <div id="align"><img id="immagine" src=<?php echo $img ?> title="Cosa vuol dire veramente fare il fullstack" alt="Foto fullstack" height="230"></div>
 <hr>
 <!--Elenco eventuali professioni legate a questo settore-->
 <?php elenco() ?>
 <!-- I miei finti link + contatti e informazioni -->
 <footer>
<a href="https://www.iubenda.com/privacy-policy/39384690" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Privacy Policy ">Privacy Policy</a><script>(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
<a href="https://www.iubenda.com/privacy-policy/39384690/cookie-policy" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Cookie Policy ">Cookie Policy</a><script>(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
<br><br><br>
<div id="social-bar">
  <a href=<?php echo $facebook; ?> class="facebook">
      <i class="fa-brands fa-facebook">
      </i>
    </a>
    <a href=<?php echo $instagram ?> class="instagram">
      <i class="fa-brands fa-instagram">
      </i>
    </a>
    <a href=<?php echo $twitter ?> class="twitter">
        <i class="fa-brands fa-twitter">
        </i>
      </a>
  </div>
  <ul id='link'>
    <li><a href='index.php' title='Vai alla home page'>Home</a></li>
    <li><a href='portfolio.php' title='Vai alla pagina del portfolio'>Portfolio</a></li>
    <li><a href='contatti-e-form.php' title='Vai alla pagina dei contatti'>Contatti + form</a></li>
  </ul>

  <ul id='contatti'>
    <li>Indirizzo: <strong>Via dei Prati 26, Roma</strong></li>
    <li>Numero di telefono: <strong>+39 3480349156</strong></li>
    <li>Mail: <strong>matteo.rossi@gmail.com</strong></li>
  </ul>

  <div id='form2'>
  <h5>Se hai bisogno di ulteriori informazioni, compila <br> pure questo form</h5>
  <form action='validazione-form.php' method='post' novalidate>
        <label for="ilTuoNome">Nome <span>*</span><br></label>
        <input type='text' id='ilTuoNome' name='nome' maxlength="25" placeholder='Il tuo nome' required><br><br>
        <label for="ilTuoCognome">Cognome <span>*</span><br></label>
        <input type='text' id='ilTuoCognome' name='cognome' placeholder='Il tuo cognome' required><br><br>
        <label for="laTuaEmail">Email <span>*</span><br></label>
        <input type='text' id='laTuaEmail' name='mail' placeholder='La tua email' required><br><br>
        <label for="laTuaRichiesta">Richiesta <span>*</span><br></label>
        <textarea name='Richiesta' id='laTuaRichiesta' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Ho preso visione della privacy policy e acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia' onclick=validateForm()></form></div>



  <h4>Copyright © 2024 Matteo</h4>

  <h2 id='secondoLogo'>Matteo</h2>

 </footer>






</body>






</html>
