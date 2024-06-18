<?php
/**
 * Pagina contenente i recapiti e il form da compilare
*/
$titolo = "Dove contattarmi + form";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$mappa = "https://maps.im-cdn.it/static?zoom=15&size=360x270&language=it&style=feature%3Aroad%7Celement%3Alabels%7Cvisibility%3Aoff&sensor=false&markers=icon%3Ahttps%3A%2F%2Fs1.immobiliare.it%2F_next%2Fstatic%2Fmedia%2Fmap-marker.27fc2b6f.png%7C45.4875%2C9.2172&center=45.4875%2C9.2172";
function recapiti() {
    echo("Vi lascio qui l'<strong>indirizzo:</strong><address>Via dei Prati 26, Roma</address><br>");
    echo("<strong>Telefono:</strong><br> +39 3480349156<br><br>");
    echo("Indirizzo <strong>e-mail:</strong><br> matteo.rossi@gmail.com<br><br>");
}
function form() {
   echo "<h1 id='informazioni'>Form per richiesta <br> informazioni</h1>
  <form action='validazione-form.php' method='post' novalidate>
  <label for='nome'>Nome <span>*</span><br></label>
  <input type='text' id='nome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' required><br><br>
  <label for='cognome'>Cognome <span>*</span><br></label>
        <input type='text' id='cognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' required><br><br>
        <label for='email'>Email <span>*</span><br></label>
        <input type='text' id='email' name='mail' minLength='0' maxLength='40' placeholder='La tua email' required><br><br>
        <label for='richiesta'>Richiesta <span>*</span><br></label>
        <textarea name='Richiesta' id='richiesta' minLength='40' maxLength='200' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Ho preso visione della privacy policy e acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia' onclick=validateForm()></form>";
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
    <link href="css/contatti-e-form.min.css" type="text/css" rel="stylesheet">
    <link href="icons8-engineering-48.png" rel="icon">




    <script> function validateForm() {
  // Get form fields
  const nome = document.getElementById("nome");
  const cognome = document.getElementById("cognome");
  const email = document.getElementById("email");
  const richiesta = document.getElementById("richiesta");
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
<!--I miei finti contatti: la mia mail, il mio numero, indirizzo e mappa sede legale-->
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<div id="nav"><b><?php link4() ?></b></div>
<div id="mappa-e-contatti">
<h1 id="Contatti">Contatti</h1>
<p>Ecco a voi una <strong>mappa</strong><br> per la mia <strong>sede legale:</strong><br><br>
    <img src=<?php echo $mappa ?> id="sede-legale" title="Posizione mia sede legale" alt="Posizione sede" width="500"></p>

 <?php recapiti() ?>
</div>
<hr>
<div id='primoForm'><br><br><?php form() ?></div>
<hr>
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



  <h4>Copyright © 2024 Matteo</h4>

  <h2 id='secondoLogo'>Matteo</h2>

 </footer>






</body>
</html>
