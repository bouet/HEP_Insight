<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="Page description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


  <title>Contact</title>  

<link href="./main.82cfd66e.css" rel="stylesheet"></head>

<body>

<!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.html" class="navbar-brand">HEP Insight</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.html" title="">
            <img class="img-responsive site-logo" alt="" src="./assets/images/logoHEP.png">
            HEP Insight
          </a>
        <p>Bienvenue sur le site decerné à la découverte du campus HEP de Nantes.</p>
      </div>
      <ul class="nav">
        <li><a href="./index.html" title="">Accueil</a></li>
        <li><a href="./carte.html" title="">Carte interactive</a></li>
		<li><a href="./ecoles.html" title="">Les écoles</a></li>
        <li><a href="./espacestravail.html" title="">Espaces de travail</a></li>
		<li><a href="./espacesvie.html" title="">Espaces de vie</a></li>
        <li><a href="./contact.php" title="">Contact</a></li>


      </ul>

      <nav class="nav-footer">
        <p class="nav-footer-social-buttons">
		  <a class="fa-icon" href="https://www.facebook.com/HEPEDUCATION/" title="" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="fa-icon" href="https://www.instagram.com/hepeducation/" title="" target="_blank">
            <i class="fa fa-instagram"></i>
          </a>
          <a class="fa-icon" href="https://twitter.com/HEP_EDUCATION" title="" target="_blank">
            <i class="fa fa-twitter"></i>
          </a>
		  <a class="fa-icon" href="https://www.linkedin.com/company/hep-education/" title="" target="_blank">
            <i class="fab fa-linkedin"></i>
          </a>
        </p>
      </nav>  
    </div> 
  </nav>
</header>
 <!-- Add your content of header -->

<main class="" id="main-collapse">

<div class="row">
  <div class="col-xs-12">
    <div class="section-container-spacer">
      <h1>Contactez-nous</h1>
      <p></p>
    </div>
    <div class="section-container-spacer">
       
          <div class="row">
<?php
if(isset($_POST['envoyer']))
{
ini_set("SMTP","smtp.free.fr");
ini_set("sendmail_from","emialpina@gmail.com");

$message="<a href='' target='blank' title='HEP'><img src='http://51.158.77.239/assets/images/logoHEP.png' title='loho HEP' alt='logo HEP' /></a><br /><br /><br />";
$message.="<div>Message dela page Contact, le ".date("d-m-y").", à ".date("H:i:s")." :</div><br />";
$message.="<div>Nom : ".stripslashes($_POST['nom'])."</div><br />";
$message.="<div>E-mail : ".stripslashes($_POST['email'])."</div><br />";
$message.="<div>Téléphone : ".$_POST['tel']."</div><br />";
$message.="<div>Message : ".stripslashes($_POST['message'])."</div><br />";

if((isset($_POST['choix_ecole'])) && (!empty($_POST['choix_ecole'])))
{
    $choix_ecole = $_POST['choix_ecole'];
}
else
{
    $choix_ecole = 'contact@laraweb.fr';
}

$email_to = $choix_ecole;

$subject='Message page Contact';
$header='From: '.$_POST['email'].' <'.$_POST['email'].'>'."\r\n";
$header .='Content-Type: text/html; charset="utf-8"'."\n";
$header .='Content-Transfer-Encoding: 8bit';

mail($email_to,$subject,$message,$header)
or die("Error: le message n'a pas pu etre envoyé");

echo '
<div id="demande_pret_valid">
Votre message nous a bien &eacute;t&eacute; transmis.<br /><br />
Nous vous contacterons dans les plus brefs délais.<br /><br />
Nous vous remercions de votre confiance.<br /><br />
Cordialement,<br />
l\'équipe HEP.<br /><br />
</div>';

              }
              ?>
              <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" class="reveal-content">
            <div class="col-md-6">
                <div class="form-group formradio">
                    <div class="titre"><label id="choix_ecole" for="choix_ecole">Chosir une école</label></div>
                    <div class="form">
                        <section class="plan">
                            <input type="radio" name="choix_ecole" id="epsi" value="info@laraweb.fr"><label class="epsi-label col" for="epsi"><img src="assets/images/logo-epsi.jpg" alt="logo EPSI" /></label>
                            <input type="radio" name="choix_ecole" id="wis" value="test@wis.fr"><label class="wis-label col" for="wis"><img src="assets/images/logo-wis.jpg" alt="logo WIS" /></label>
                            <input type="radio" name="choix_ecole" id="ifag" value="test@ifag.fr"><label class="ifag-label col" for="ifag"><img src="assets/images/logo-ifag.jpg" alt="logo ifag" /></label>
                            <input type="radio" name="choix_ecole" id="idrac" value="test@idrac.fr"><label class="idrac-label col" for="idrac"><img src="assets/images/logo-idrac.jpg" alt="logo idrac" /></label>
                            <input type="radio" name="choix_ecole" id="igefi" value="test@igefi.fr"><label class="igefi-label col" for="igefi"><img src="assets/images/logo-igefi.jpg" alt="logo igefi" /></label>
                            <input type="radio" name="choix_ecole" id="supdecom" value="test@supdecom.fr"><label class="supdecom-label col" for="supdecom"><img src="assets/images/logo-supdecom.png" alt="logo supdecom" /></label>
			</section>
                    </div>
                    
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required >
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
              </div>
              <div class="form-group">
                  <input type="tel" class="form-control" id="tel" name="tel" placeholder="Votre téléphone">
              </div>
              <div class="form-group">
                  <textarea class="form-control" rows="3" name="message" placeholder="Votre message" required></textarea>
              </div>
                <button type="submit" class="alert alert-success" name="envoyer">Envoyer</button>
            </div>
              </form>
            <div class="col-md-6">
                
              <ul class="list-unstyled address-container">
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </span>
                  02 40 76 60 87
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-at" aria-hidden="true"></i>
                  </span>
                   contact@hep-education.com
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                  16 Boulevard Général de Gaulle, 44200 Nantes
                </li>
              </ul>
              <h3>Suivez-nous sur les réseaux sociaux</h3>
				<p class="nav-footer-social-buttons">
				  <a class="fa-icon" href="https://www.facebook.com/HEPEDUCATION/" title="" target="_blank">
					<i class="fab fa-facebook-f"></i>
				  </a>
				  <a class="fa-icon" href="https://www.instagram.com/hepeducation/" title="" target="_blank">
					<i class="fa fa-instagram"></i>
				  </a>
				  <a class="fa-icon" href="https://twitter.com/HEP_EDUCATION" title="" target="_blank">
					<i class="fa fa-twitter"></i>
				  </a>
				  <a class="fa-icon" href="https://www.linkedin.com/company/hep-education/" title="" target="_blank">
					<i class="fab fa-linkedin"></i>
				  </a>
				</p>
              <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.539135061761!2d-1.5415612841383335!3d47.20603232355553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4805eeb57a11b053%3A0xde53a092405c8d74!2s16+Boulevard+G%C3%A9n%C3%A9ral+de+Gaulle%2C+44200+Nantes!5e0!3m2!1sfr!2sfr!4v1538548392533" width="100%" height="435" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
          </div>
    </div>
  </div>
</div>

</main>

<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="./main.85741bff.js"></script>

<style type="text/css">
    .titre label {font-weight: bold; font-size: 16px;}
    form .formradio {padding-bottom: 20px;}
    .plan img {max-width: 130px;}
    .img_campus {width: 100%;}
    #demande_pret_valid {font-weight: bold;}
    
    .col {
  display: block;
  float:left;
  margin: 1% 0 1% 1.6%;
}

.col:first-of-type { margin-left: 0; }

/* CLEARFIX */

.cf:before,
.cf:after {
    content: " ";
    display: table;
}

.cf:after {
    clear: both;
}

.cf {
    *zoom: 1;
}

/* FORM */

.form .plan input, .form .payment-plan input, .form .payment-type input{
	display: none;
}

.form label{
	position: relative;
	color: #fff;
	//background-color: #aaa;
	font-size: 26px;
	text-align: center;
	height: 150px;
	line-height: 150px;
	display: block;
	cursor: pointer;
	//border: 3px solid transparent;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
        padding: 0px 10px 0px 10px;
}

.form .plan input:checked + label, .form .payment-plan input:checked + label, .form .payment-type input:checked + label{
	//border: 3px solid #333;
	background-color: #2fcc71;
}

.form .plan input:checked + label:after, form .payment-plan input:checked + label:after, .form .payment-type input:checked + label:after{
	content: "\2713";
	width: 40px;
	height: 40px;
	line-height: 40px;
	border-radius: 100%;
	//border: 2px solid #333;
	background-color: #2fcc71;
	z-index: 999;
	position: absolute;
	top: -10px;
	right: -10px;
}
</style>

</body>

</html>