<?php
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
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
    <title>Validazione form</title>
    <link href=<?php echo $social; ?> type="text/css" rel="stylesheet">
    <link href="icons8-engineering-48.png" rel="icon">
    <script>
function validateForm() {
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
    // Code to prevent form submission...
    event.preventDefault();
  }
}
</script>
  <style>
    #home{
    position:absolute;
    top:20px;
    left:900px;
    font-size: larger;
  }
  #link1{
    position:absolute;
    top:20px;
    left:1000px;
    font-size: larger;
  }
  #link2{
    position: absolute;
    top:20px;
    left:1190px;
    font-size: larger;
  }
    footer{
    background-color: #5A5A5A;
    color: whitesmoke;
    height: fit-content;
}
#link>li>a{
    text-decoration: none;
    color: yellow;
}
html{
  background-color: rgb(225, 239, 38)
}
#link>li{
    margin-top: 20px;
}
#contatti>li{
    margin-top: 20px;
}
#link{
    padding-top: 60px;
    padding-left: 60px;
    display: inline-block;
    margin-bottom: 170px;
}
#link>li>a:hover{
    text-decoration: underline;
    opacity: 0.6;
}
#secondoLogo{
    text-align: right;
    font-family: fantasy;
    margin-right: 200px;
    font-size: 65px;
    color: yellow;
    text-decoration: line-through;
}
#contatti{
    margin-left: 100px;
    display: inline-block;
}
#ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color: rgb(225, 239, 38);
    text-decoration: underline;
    height: fit-content;
    font-size: 15px;
    width: 300px;
    height: 40px;
}
#invia2{
    background-color: rgb(225, 239, 38);
    color:white;
    width: 70px;
    height: 40px;
}
#invia2:hover{
    color:aquamarine;
    text-decoration: underline;
    opacity: 0.7;
    border-style: groove;
    border-radius: 10px;
}
#form2{
    display: inline-block;
    margin-left: 170px;
}
h5{
    font-size: 25px;
}
h4{
    text-align: center;
}
#social-bar {
    top: 0;
    margin-top: 100px;
    bottom: 0;
    left: 0;
    margin-left: 100px;
    height: -moz-fit-content;
    height: fit-content
}

#social-bar a {
    text-align: center;
    transition: .5s;
    padding: 15px;
    font-size: 20px;
    text-decoration: none;
    color: #fff
}

#social-bar a:hover {
    opacity: .8;
    color: #258ce6;
    border-radius: 10px;
    border-style: groove
}

.facebook {
    background: #3b5998
}

.instagram {
    background: #dd2a7b
}

.twitter {
    background: #55acee
}
.instagram,.twitter{
  margin-left: 60px;
}
#logo{
    position: absolute;
    left: 20px;
    top: -17px;
    font-size: 35px;
    color: #fff;
    text-decoration: line-through;
    font-family: fantasy;
}
#logo:hover{
  opacity: 0.9;
  color: grey;
}
  /*
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {

  /* CSS */
  html,body{
        overflow-x: hidden;
        max-width: 100%;
  }
  #logo{
      font-family: cursive;
      font-size: 30px;
    }
    #secondoLogo{
      font-size: 40px;
      font-family: cursive;
    }
    #home,#link1,#link2{
      font-size: 11px;
    }
    #home{
      left: 135px;
    }
    #link1{
      left: 185px;
    }
    #link2{
      left: 265px
    }

}
  </style>


</head>
<body>
<?php
 /*Pagina per la validazione dei dati del form
 */
 $nome = UT::richiestaHTTP("nome");
 $cognome = UT::richiestaHTTP("cognome");
 $email = UT::richiestaHTTP("mail");
 $richiesta = UT::richiestaHTTP("Richiesta");
 if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<style>
    #testo{
      font-size: 25px;
    }
    h1{
      font-size: 35px;
    }
    span{
      color: red;
    }
    #home,#link1,#link2{
      color: #fff;
      font-size: 20px;
      margin-left: 10px;
      text-decoration: none;
    }
    #home{
      position: absolute;
      top: 20px;
      left: 1005px;
    }
    #link1{
      position: absolute;
      top: 20px;
      left: 1105px;
    }
    #link2{
      position: absolute;
      top: 20px;
      left: 1285px;
    }
    #home:hover{
      text-decoration: underline;
      color: #ffd700;
    }
    #link1:hover{
      text-decoration: underline;
      color: #ffd700;
    }
    #link2:hover{
      text-decoration: underline;
      color: #ffd700;
    }
    #nav{
      background-color: black;
      height: 50px;
    }
     html{
      background-color: rgb(225, 239, 38);
      color: black;
      text-align: center;
      font-size: larger
     }
    .facebook,.instagram,.twitter{
      margin-left: 30px;
    }
    #contatti>li{
      margin-left: -110px;
      font-size: 18px;
    }
    #form2{
      margin-left: 40px;
    }
    #ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
      width: fit-content;
    }
    h5{
      font-size: 13px;
    }
    h4{
      margin-left: -50px;
    }
    #secondoLogo{
      text-align: left;
      margin-left: 20px;
      font-family: cursive;
    }
    @media(min-width: 768px)and (max-width: 1024px) {
      #home{
       left: 200px
      }
      #link1{
       left: 300px
      }
      #link2{
       left: 500px;
      }
      form{
        margin-left: 20px
      }
      #testo{
        margin-left: 20px
      }
      }

    @media (min-width: 320px) and (max-width: 480px) {

      /* CSS */
      h1,#testo{
        text-align: left;
      }
      #home,#link1,#link2{
        font-size: 11px;
        color: #fff;
        position: absolute
      }
      html{
        max-width: 100%
      }
      #home{
        left: 145px;
      }
      #link1{
        left: 185px;
      }
      #link2{
        left: 265px
      }
      #checkmark{
        width: 270px;
        margin-left: 20px
      }
      p,h1,h2{
        margin-left: 20px
      }
      #align{
        text-align: left;
      }
      #logo{
        font-family: cursive;
        font-size: 30px;
      }
      .facebook,.instagram,.twitter{
        margin-left: 10px;
      }
      #contatti>li{
        margin-left: -110px;
        font-size: 18px;
      }
      #form2{
        margin-left: 40px;
      }
      #ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
        width: fit-content;
      }
      h5{
        font-size: 13px;
      }
      h4{
        margin-left: -50px;
      }
      #secondoLogo{
        text-align: left;
        margin-left: 20px;
        font-family: cursive;
      }
      }
    </style>";
    echo "<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>";
    echo "<div id='nav'><b><a href='index.php' id='home'>Home</a> <a id='link1' href='portfolio.php'>Il mio portfolio</a> <a href='contatti-e-form.php' id='link2'>Contatti</a></b></div>";
    echo "<h1>Validazione form</h1>";
    echo "<p id='testo'>L'elemento <strong>'$email'</strong> è valido!</p> <br> <h1>Il form è valido!</h1>
  <div id='align'><img src='https://cdn.pixabay.com/photo/2014/03/24/17/17/checked-295296_1280.png' id='checkmark' title='Checkmark' alt='Checkmark' width='350' height='350'></div><hr>";
 } else {
  echo "<a href='index.php' title='Matteo'><h2 id='logo'>Matteo</h2></a>";
    echo "<div id='nav'><b><a href='index.php' id='home'>Home</a> <a id='link1' href='portfolio.php'>Il mio portfolio</a> <a href='contatti-e-form.php' id='link2'>Contatti</a></b></div>";
    echo "<h1>Validazione form</h1>";
    echo "<p id='testo'>L'elemento <br> <strong>'$email'</strong> non è valido! <br> Riprovare.</p> <hr>";
    echo "<h1 id='informazioni'>Form per richiesta <br> informazioni</h1>
    <form action='validazione-form.php' method='post' novalidate>
        <label for='nome'>Nome <span>*</span><br></label>
        <input required type='text' id='nome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' value=$nome><br><br>
        <label for='cognome'>Cognome <span>*</span><br></label>
        <input required type='text' id='cognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' value=$cognome><br><br>
        <label for='email'>Email <span>*</span><br></label>
        <input required type='text' id='email' name='mail' minLength='0' maxLength='40' placeholder='La tua email' value=$email><br><br>
        <label for='richiesta'>Richiesta <span>*</span><br></label>
        <textarea name='Richiesta' id='richiesta' minLength='40' maxLength='200' required placeholder='Richiesta'>$richiesta</textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Ho preso visione della privacy policy e acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia' onclick=validateForm()></form><br><br><hr>";
        echo "<style> #testo{
          color: red;
          font-size: larger;
        }
        span{
          color: red;
        }
        h1{
          font-size: 30px;
          text-align: center;
        }
        #home,#link1,#link2{
          color: #fff;
          font-size: 25px;
          margin-left: 10px;
          text-decoration: none;
        }
        #home{
          position: absolute;
          top: 20px;
          left: 900px;
        }
        #link1{
          position: absolute;
          top: 20px;
          left: 1000px;
        }
        #link2{
          position: absolute;
          top: 20px;
          left: 1190px;
        }
        #home:hover{
          text-decoration: underline;
          color: #ffd700;
        }
        #link1:hover{
          text-decoration: underline;
          color: #ffd700;
        }
        #link2:hover{
          text-decoration: underline;
          color: #ffd700;
        }
        #nav{
          background-color: black;
          height: 50px;
        }
        #nome,#cognome,#richiesta{
          font-family: Georgia, 'Times New Roman', Times, serif;
          background-color: orange;
          text-decoration: underline;
          height: fit-content;
          width: 500px;
          height: 40px;
        }
        #email{
          font-family: Georgia, 'Times New Roman', Times, serif;
          background-color: #FF7F7F;
          text-decoration: underline;
          height: fit-content;
          width: 500px;
          height: 40px;
        }


      html{
        font-size: larger;
      }
          #invia{
            background-color: orange;
            color:white;
            width: 70px;
            height: 40px;
        }
        #invia:hover{
            color:aquamarine;
            text-decoration: underline;
            opacity: 0.7;
            border-style: groove;
            border-radius: 10px;
        }

        @media(min-width: 768px)and (max-width: 1024px) {
          #home{
           left: 200px
          }
          #link1{
           left: 300px
          }
          #link2{
           left: 500px;
          }
          form{
            margin-left: 20px
          }
          #testo{
            margin-left: 20px
          }



     }
        /*
      ##Device = Most of the Smartphones Mobiles (Portrait)
      ##Screen = B/w 320px to 479px
    */

    @media (min-width: 320px) and (max-width: 480px) {

        /* CSS */
        h1{
          text-align: center;
          font-size: 25px;
        }
        #informazioni{
          text-align: center
        }
        html{
          font-size: large;
        }
        #home,#link1,#link2{
          font-size: 11px;
        }
        #home{
          left: 135px;
        }
        #link1{
          left: 185px;
        }
        #link2{
          left: 265px
        }
        form{
          margin-left: 20px
        }
        #testo{
          margin-left: 20px
        }
      #nome,#cognome,#email,#richiesta{
        width: 190px;
      }
      #logo{
        font-family: cursive;
        font-size: 30px;
      }
      .facebook,.instagram,.twitter{
        margin-left: 10px;
      }
      #contatti>li{
        margin-left: -110px;
        font-size: 18px;
      }
      #form2{
        margin-left: 40px;
      }
      #ilTuoNome,#ilTuoCognome,#laTuaEmail,#laTuaRichiesta{
        width: fit-content;
      }
      h5{
        font-size: 13px;
      }
      h4{
        margin-left: -50px;
      }
      #secondoLogo{
        text-align: left;
        margin-left: 20px;
        font-family: cursive;
      }}</style>";
  }

 ?>
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

  <?php
    // Inserisco i dati nell'apposita tabella del database
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {$sqlquery = "INSERT INTO form_sito(nome, cognome, email, richiesta) VALUES('$nome','$cognome','$email','$richiesta')";
    }
    // Se la connessione ha successo inserisco la query
    if ($conn->query($sqlquery) === TRUE) {
    

    // Altrimenti mostro il messaggio di errore
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

        

// Chiudo la connessione.
$conn->close();

    ?>
 </footer>
</body>






</html>
