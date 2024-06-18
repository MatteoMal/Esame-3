<?php
/**
 * Pagina contenente il portfolio con l'elenco di tutti i lavori
 */
$titolo = "Il mio portfolio";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
require("public-functions.php");
require("connessione.php");
use MieClassi\Utility as UT;

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
    <link href="css/portfolio.min.css" type="text/css" rel="stylesheet">
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
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<div id='nav'><b><?php link3() ?></b></div>
<!--Elenco lavori finti (raggruppati in categorie) con relative immagini-->
<div id="portfolio">

    <?php
    $sql = "SELECT id, jobCategory, jobName, jobDescription, jobImage FROM jobs";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // mostro i dati nella pagina
        while ($row = $result->fetch_assoc()){
            $ID = UT::richiestaHTTP("id");
            $ID = ($ID == null) ? 1 : $ID;
            $n = $row["id"];
            $classeID = ($n == $ID) ? ' class="id"' : '';
            printf("<h2 %s>%s</h2> <p>%s</p> <p><a title='Vai alla pagina lavori' href='lavori.php?id=%u'>%s</a></p> <h3>Breve descrizione del lavoro: </h3><p>%s</p>", $classeID, $row["jobCategory"], $row["id"], $row["id"], $row["jobName"], $row["jobDescription"]);
        }
    }
    else {
        echo "0 risultati";
    }
    $conn->close();
    ?>
    <h2>Lavori in programmazione</h2> <p>12</p> <p><a href='descrizione-lavoro-singolo.php' title='Vai alla pagina del lavoro singolo'>Full-stack developer</a></p> <h3>Breve descrizione del lavoro: </h3><p>Fusce vel fringilla arcu, eu venenatis purus. Suspendisse placerat mauris nec feugiat feugiat. Proin lobortis leo ut rhoncus hendrerit. Donec ullamcorper sit amet orci ut imperdiet.</p>
</div>
<hr>
<br><br><br>
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
        <h5 id='infoForm'>Se hai bisogno di ulteriori informazioni, <br> compila pure questo form</h5>
        <form action='validazione-form.php' method='post' novalidate>
            <input type='text' id='ilTuoNome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' required><br><br>
            <input type='text' id='ilTuoCognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' required><br><br>
            <input type='text' id='laTuaEmail' name='mail' minLength='0' maxLength='40' placeholder='La tua email' required><br><br>
            <textarea name='Richiesta' id='laTuaRichiesta' minLength='40' maxLength='200' required placeholder='Richiesta'></textarea><br><br>
            <input type='checkbox' id='spunta-dati'>
            <label for='spunta-dati'>Ho preso visione della privacy policy e acconsento al <br> trattamento <br> dei dati personali</label><br><br>
            <input type='submit' id='invia' name='Invia' onclick=validateForm()></form></div><br><br><br>


    <h4>Copyright © 2024 Matteo</h4><br><br><br>

    <h2 id='secondoLogo'>Matteo</h2>


</footer>






</body>












</html>





