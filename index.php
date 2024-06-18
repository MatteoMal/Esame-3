<?php
/**
 * Pagina home del sito + chi sono + servizi
 */
$titolo = "Il mio sito web";
$michiamo = "Mi chiamo";
$nome = "Matteo Rossi";
$professione = "Sono un <strong>full-stack developer</strong>";
$img = "https://www.androiditaly.com/wp-content/uploads/2022/09/apple-logo-nero-fondo-oro-androiditaly.com_.png";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$altro = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor mauris nulla, id ornare lorem dapibus ut. <br> Vestibulum consectetur ultricies lacus, sit amet condimentum lectus fringilla in.";
$altro2 = "Aenean varius vestibulum suscipit. Nulla facilisi. Aliquam quis ex enim. Curabitur non dolor vitae orci fermentum hendrerit ullamcorper id sapien. Vivamus vel mi porttitor, porttitor arcu eget, tempus arcu. Ut et nibh quam.";
$altro3 = "Integer facilisis erat a ligula ultricies vehicula. Aenean imperdiet nibh et felis iaculis, vel pulvinar velit elementum. Pellentesque malesuada volutpat odio, vel pellentesque justo tristique bibendum.";
$contattami = "Contattami";
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
<script src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>




    <meta charset="Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="il mio sito web">
    <title><?php echo $titolo; ?></title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="css/index.min.css" type="text/css" rel="stylesheet">
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
<!-- Presentazione sito (chi sono) -->
<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>
<div id='nav'><b><?php link2() ?></b></div>
<div id='chi-sono'>

    <h2 id="mi-chiamo"><?php echo $michiamo; ?></h2><br>
    <h1 id="nome"><?php echo $nome; ?></h1>
    <p id="professione"><?php echo $professione; ?></p>
</div>



<div>
    <form action="preventivo.php" method="post">
        <button id="bottone" type="submit">Chiedici un preventivo</button></form></div>


<div id='img'> <img src=<?php echo $img; ?> id="logo-Apple" title="Logo Apple full-stack developer"></div>
<hr>

<img id="imgAltro" title="Informazioni" alt="Informazioni" src="https://www.ticonsiglio.com/wp-content/uploads/2023/01/smart-working-lavoro.jpg">
<div id='altro'>
    <h2 id="info">Informazioni sulla nostra azienda</h2>
    <h3>Di cosa ci occupiamo</h3>
    <p id="testo"><?php echo $altro; ?></p>
    <hr>
    <h3>Perché sceglierci</h3>
    <p id="testo2"><?php echo $altro2 ?></p>
    <hr>
    <h3>Le nostre priorità per il cliente</h3>
    <p id="testo3"><?php echo $altro3 ?></p>
</div>
<hr>
<div id='elenco'>
    <h2 id="servizi">I nostri servizi e progetti</h2>
    <?php
    $sql = "SELECT id, serviceName, serviceDescription, serviceDescription2, serviceImage FROM services";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // mostro i dati nella pagina
        while ($row = $result->fetch_assoc()){
            $ID = UT::richiestaHTTP("id");
            $ID = ($ID == null) ? 1 : $ID;
            $n = $row["id"];
            $classeID = ($n == $ID) ? ' class="id"' : '';
            printf("<p %s><a href='servizi.php?id=%u' title='%s' >%s</a></p><h3>Quali sono i vantaggi di questi servizi e progetti?</h3><p class='descrizione'>%s</p>", $classeID, $row["id"], $row["serviceName"], $row["serviceName"], $row["serviceDescription"]);
        }
    }
    else {
        echo "0 risultati";
    }
    $conn->close();
    ?>
    <p><a href="progetto-front-end.php" title="Vai al primo progetto">Progetto front-end</a></p> <h3>Quali sono i vantaggi di questi servizi e progetti?</h3><p class="descrizione">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur quis justo non convallis. Aliquam erat volutpat. Cras vestibulum risus ullamcorper sagittis hendrerit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Per saperne di più, vai alla pagina del primo progetto.</p>
    <p><a href="progetto-back-end.php" title="Vai al secondo progetto">Progetto back-end</a></p> <h3>Quali sono i vantaggi di questi servizi e progetti?</h3><p class="descrizione">Maecenas nec felis quis massa maximus porta. Pellentesque rhoncus interdum ante sit amet ultricies. Praesent porttitor scelerisque mi et dignissim. In hac habitasse platea dictumst. Sed a sodales nisl, eget mollis quam. Phasellus nunc est, faucibus sit amet iaculis sed, accumsan vitae lacus. Per saperne di più, vai alla pagina del secondo progetto.</p>
    <p><a href="progetto-web-design.php" title="Vai al terzo progetto">Progetto web design</a></p> <h3>Quali sono i vantaggi di questi servizi e progetti?</h3><p class="descrizione">Sed lobortis cursus egestas. Etiam molestie ipsum quis velit blandit, at vulputate diam tempus. Ut hendrerit accumsan dolor eu sodales. Nunc nec odio vitae quam posuere ultricies. Aliquam venenatis rutrum enim, sit amet vestibulum dolor pellentesque nec. Per saperne di più, vai alla pagina del terzo progetto.</p>
    <p><a href="progetto-cloud-engineering.php" title="Vai al quarto progetto">Progetto cloud engineering</a></p> <h3>Quali sono i vantaggi di questi servizi e progetti?</h3><p class="descrizione">Fusce ante ex, consequat eget risus a, tempus pretium elit. Proin sagittis purus quam. Sed sed porttitor nulla. Nam at faucibus mi, viverra semper lacus. Proin cursus erat eget ante tristique, vitae vehicula orci pharetra. Praesent purus mi, consectetur non turpis ac, porta posuere elit. Per saperne di più, vai alla pagina del quarto progetto.</p>
</div>
<hr>
<h1 id='team'>Il nostro team di sviluppo</h1>
<div id='align1'><p><strong>Leonida Rossi</strong></p><p><u>Software Architect</u></p><img src='https://img.freepik.com/free-photo/portrait-beautiful-young-woman-standing-grey-wall_231208-10760.jpg?size=626&ext=jpg' width='350' alt='Membro 1' id='membro-1' title='Primo membro del team'></div><div id='align2'><p><strong>Cristiano Barese</strong></p><p><u>Mobile App Developer</u></p><img src='https://st3.depositphotos.com/1017228/18878/i/450/depositphotos_188781580-stock-photo-handsome-cheerful-young-man-standing.jpg' width="350" alt='Membro 2' id='membro-2' title='Secondo membro del team'></div><div id='align3'><p><strong>Assunta Milanesi</strong></p><p><u>Data Scientist</u></p><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS02SrhmO2Lc8KZKkHuh9KOEng1nAqmuQk4TJcmOc5Y_w&s' alt='Membro 3' id='membro-3' title='Terzo membro del team' width="350" height="235"></div><div id='align4'><p id='matteo'><strong>Matteo Rossi</strong></p><p id='founder'><u>Founder (CEO)</u></p><img src='https://www.lavoroamaglia.it/wp-content/uploads/2022/11/maglie-ai-ferri-uomo-modello-pullover-lana-grossa-merino-superiore.jpg' alt='Membro 4' id='membro-4' title='Quarto membro del team' width='350' height="235"></div>
<hr>
<br>
<div id="numeri"><h1>Clienti felici</h1> <p>100+</p></div> <div id="numeri2"><h1>Supporto da</h1> <p>30+ persone</p></div>
<div id="recensione"><h1>Francesco Russo</h1> <p>★ ★ ★ ★ ★ Ottimo! <br> <span id="recensioneElementoSingolo">Proin a nisi porttitor, molestie augue et, tincidunt est. Donec massa orci, congue id viverra eget, ornare non sem. Morbi risus est, iaculis nec posuere vel, volutpat non erat. Phasellus at nibh gravida, sagittis nisl nec, sodales dui. Donec arcu elit, accumsan sed quam vel, rhoncus posuere neque.</span></p></div>
<div id="numeri3"><h1>Recensioni</h1> <p>50+ ★ ★ ★ ★ ★</p></div> <div id="numeri4"><h1>Progetti</h1> <p>400+ conclusi</p></div>
<br>
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
        <h5>Se hai bisogno di ulteriori informazioni, <br> compila pure questo form</h5>
        <form id='secondoForm' action='validazione-form.php' method='post' novalidate>
            <label for="ilTuoNome">Nome <span>*</span><br></label>
            <input type='text' id='ilTuoNome' name='nome' minlength="0" placeholder='Il tuo nome' required><br><br>
            <label for="ilTuoCognome">Cognome <span>*</span><br></label>
            <input type='text' id='ilTuoCognome' name='cognome' minlength="0" maxlength="25" placeholder='Il tuo cognome' required><br><br>
            <label for="laTuaEmail">Email <span>*</span><br></label>
            <input type='text' id='laTuaEmail' name='mail' minlength="0" maxlength="40" placeholder='La tua email' required><br><br>
            <label for="laTuaRichiesta">Richiesta <span>*</span><br></label>
            <textarea minlength="40" maxlength="200" name='Richiesta' id='laTuaRichiesta' required placeholder='Richiesta'></textarea><br><br>
            <input type='checkbox' id='spunta-dati'>
            <label for='spunta-dati'>Ho preso visione della privacy policy e acconsento al <br> trattamento <br> dei dati personali</label><br><br>
            <input type='submit' id='invia' name='Invia' onclick=validateForm()></form></div>



    <h4>Copyright © 2024 Matteo</h4>

    <h2 id='secondoLogo'>Matteo</h2>

</footer>
</body>
</html>
