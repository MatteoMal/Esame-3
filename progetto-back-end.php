<?php

$titolo = "Progetto 2";
$social = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css";
$img = "https://www.egovaleo.it/wp-content/uploads/2023/10/back-end-developer.jpg";
$facebook = "https://www.facebook.com";
$instagram = "https://www.instagram.com";
$twitter = "https://twitter.com/i/flow/login";
require("funzioni.php");
function testoRandom2() {
    echo("<h2 id='titolo'>Progetto <br> back-end</h2>");
    echo("<p id='testo'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae posuere massa. Vivamus vitae dui vel eros tempor maximus. Nulla convallis odio non lacus imperdiet interdum. Praesent vel egestas purus. Duis ac vestibulum eros. Duis dictum placerat purus, non aliquet nibh volutpat vitae. Aliquam erat volutpat.

    Duis faucibus tempor neque, et faucibus risus luctus eget. Duis auctor metus sed nisl dictum, eget efficitur diam cursus. Vivamus ut consectetur mauris, viverra gravida urna. In facilisis velit in sem finibus euismod. Integer porttitor nisl nisi, eget volutpat nisl volutpat at. Praesent tristique at arcu id lacinia. Quisque eleifend sit amet urna eget rutrum. Curabitur sed condimentum massa, eget volutpat turpis. Phasellus id purus aliquet, iaculis risus sed, sollicitudin odio. Aenean porttitor non orci at auctor.

    Mauris imperdiet auctor nibh, non maximus tellus sollicitudin at. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam eu purus eget tellus sodales finibus. Nam nec sapien blandit, tincidunt sapien vitae, rutrum nisl. Integer tempus magna in tellus dictum, quis finibus orci efficitur. In et neque nibh. In gravida nisi at nisl semper, egestas auctor odio iaculis. Morbi nunc nulla, congue a felis quis, viverra placerat elit. Sed ut convallis purus, eu pretium est.

    Suspendisse cursus, urna eu condimentum mattis, orci eros tristique elit, ut pharetra purus dui vitae velit. Nunc nec eros id felis sodales feugiat. Sed commodo rhoncus magna, vel ullamcorper orci ullamcorper aliquam. <br><br><br> Donec lacinia diam quis elit semper rhoncus. Ut sed gravida magna. Praesent viverra, magna ut efficitur malesuada, dolor magna rhoncus elit, at tempor urna dolor sed arcu. Cras bibendum sem risus, vitae porta libero pharetra et. Aenean pretium, tortor ut maximus tempor, elit massa mattis urna, et aliquet sem ipsum a metus. Vivamus rhoncus, mi quis bibendum iaculis, lectus eros elementum ex, efficitur malesuada arcu mauris non libero. Vestibulum quis arcu nec metus molestie aliquet ut vitae eros. Cras ullamcorper elit in enim pulvinar gravida. Morbi viverra urna in lorem luctus, in consectetur tellus sodales.

    Donec maximus, ex eget laoreet auctor, velit ante molestie erat, et mollis lacus arcu rutrum ex. Mauris ut justo ultricies, rhoncus dui in, consequat nisl. In lobortis nisi et mi scelerisque venenatis. Curabitur eu felis maximus, ultrices ante ut, porttitor turpis. Duis in ipsum interdum, aliquam massa id, congue odio. Sed augue lorem, aliquam ac imperdiet cursus, mollis nec ipsum. Vivamus blandit feugiat nibh, ac gravida felis eleifend quis. Aenean sit amet eros faucibus purus varius bibendum eu at turpis. Phasellus hendrerit lorem vel felis consequat pharetra. Donec laoreet dolor ut massa consectetur euismod. Nam bibendum dui at nunc vestibulum tincidunt.orem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vestibulum quis nulla eget mollis. Phasellus eget nisl convallis, accumsan purus nec, pharetra nunc. Maecenas tincidunt, ex vitae hendrerit euismod, neque quam feugiat tellus, at iaculis purus odio sit amet erat. Morbi ac auctor est, ac euismod nunc. Vivamus at justo convallis, vestibulum sapien eget, viverra ipsum. </p>");
}

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
    <link href="icons8-engineering-48.png" rel="icon">
    <style>
      footer{
    background-color: #5A5A5A;
    color: whitesmoke;
    height: fit-content;
}
#link>li>a{
    text-decoration: none;
    color: yellow;
}
#link>li{
    margin-top: 20px;
}
span{
  color: red;
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
    margin-right: 50px;
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
#invia{
    background-color: rgb(225, 239, 38);
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
#form2{
    display: inline-block;
    margin-left: 300px;
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
    color: grey;
    opacity: 0.9;
}
   #titolo,p{
    text-align: center;
   }
   #testo{
    margin-left: 50px;
    margin-right: 50px;
   }
   html{
    font-size: larger;
    background-color: rgb(225, 239, 38);
   }
   img{
    margin-top: 50px;
   }
   #immagine{
    text-align: center;
   }
  #home,#link1,#link2{
    color: #fff;
    font-size: larger;
    margin-left: 10px;
    text-decoration: none;
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



  }

  /*
  ##Device = Most of the Smartphones Mobiles (Portrait)
  ##Screen = B/w 320px to 479px
*/

@media (min-width: 320px) and (max-width: 480px) {

  /* CSS */
   #img{
    width: 200px;
   }
   #immagine{
    text-align: left;
   }
   html,body{
    max-width: 100%;
    overflow-x: hidden;
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
    #testo{
      margin-right: 10px;
    }
   #titolo{
    text-align: left;
    margin-left: 20px;
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
</style>
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
<div id="nav"><b><?php link5() ?></b></div>
<?php testoRandom2() ?>
<div id="immagine"><img src= <?php echo $img ?> title="Il mio secondo progetto" id="img" alt="Immagine secondo progetto" width="500" height="300"></div>
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

  <div id='form2'>
  <h5>Se hai bisogno di ulteriori informazioni, compila <br> pure questo form</h5>
  <form action='validazione-form.php' method='post' novalidate>
        <label for="ilTuoNome">Nome <span>*</span><br></label>
        <input type='text' id='ilTuoNome' name='nome' minLength='0' maxLength='25' placeholder='Il tuo nome' required><br><br>
        <label for="ilTuoCognome">Cognome <span>*</span><br></label>
        <input type='text' id='ilTuoCognome' name='cognome' minLength='0' maxLength='25' placeholder='Il tuo cognome' required><br><br>
        <label for="laTuaEmail">Email <span>*</span><br></label>
        <input type='text' id='laTuaEmail' name='mail' minLength='0' maxLength='40' placeholder='La tua email' required><br><br>
        <label for="laTuaRichiesta">Richiesta <span>*</span><br></label>
        <textarea name='Richiesta' id='laTuaRichiesta' minLength='40' maxLength='200' required placeholder='Richiesta'></textarea><br><br>
        <input type='checkbox' id='spunta-dati'>
        <label for='spunta-dati'>Ho preso visione della privacy policy e acconsento al <br> trattamento <br> dei dati personali</label><br><br>
        <input type='submit' id='invia' name='Invia' onclick=validateForm()></form></div>



  <h4>Copyright © 2024 Matteo</h4>

  <h2 id='secondoLogo'>Matteo</h2>

 </footer>

</body>


</html>
