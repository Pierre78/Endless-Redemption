<?php
  session_start();
  ?>
  <!doctype html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Endless-Redemption-Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
  <!-- call bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>
<div class="w3-top">
 <div class="w3-bar w3-grey w3-card w3-left-align w3-large">
    
    <a href="homepage.html" class="w3-bar-item w3-button w3-padding-large w3-hover-white"  style="font-family:grobold">Home</a>
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-grey" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="descriptif.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="font-family:grobold">Descriptif</a>
    <a href="invocateur.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="font-family:grobold">Invocateurs</a>
    <a href="actualites.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  style="font-family:grobold">Actualités</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white"  style="font-family:grobold">Contactez-nous</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="descriptif.html" class="w3-bar-item w3-button w3-padding-large">Descriptif</a>
    <a href="invocateur.html" class="w3-bar-item w3-button w3-padding-large">Invocateurs</a>
    <a href="actualites.html" class="w3-bar-item w3-button w3-padding-large">Actualités</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-center" style="    padding: 35px;
    margin-top: 0px;;
    background: #DCDCDC;
    height: 113px;">
  <h1 class="w3-margin" style="font-family:grobold">Endless Redemption</h1>

</header>
 <!-- <div style="padding-bottom:100px" class="container">
  <div class="row">
  <div class="col-md-12">
  <hr>
  <div class="alert alert-info"><b>INFOS:</b> Ce formulaire est une démo, le fonctionnement est complet mais le message n'arrivera nul part, les spammer peuvent passer leur chemin!</div>
  <hr>
  </div>
  </div>
  </div>-->
<!-- CONTENT -->
  <div class="container" style="padding:50px">
  <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div class="alert alert-danger">
  <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div class="alert alert-success">
  Votre email à bien été transmis !
  </div>
  <?php endif; ?>
<form action="send_form.php" method="post">
  <div class="row">
<div class="col-md-6">
  <div class="form-group">
  <label for="inputname" style="text-align: left">Votre nom</label>
  <input required type="text" name="name" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
    <div class="col-md-6">
  <div class="form-group">
  <label for="inputfirstname" style="text-align: left">Votre Prénom</label>
  <input required type="text" name="firstname" class="form-control" id="inputfirstname" value="<?php echo isset($_SESSION['inputs']['firstname'])? $_SESSION['inputs']['firstname'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
  <div class="col-md-6">
  <div class="form-group">
  <label for="inputtopic"style="text-align: left">sujet</label>
  <input required type="text" name="topic" class="form-control" id="inputtopic" value="<?php echo isset($_SESSION['inputs']['topic'])? $_SESSION['inputs']['topic'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-6">
  <div class="form-group">
  <label for="inputemail"style="text-align: left">Votre email</label>
  <input required type="email" name="email" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
  </div><!--/*.form-group-->
  </div><!--/*.col-md-6-->
<div class="col-md-12">
  <div class="form-group">
  <label for="inputmessage"style="text-align: left">Votre message</label>
  <textarea required id="inputmessage" name="message" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
  </div><!--/*.form-group-->
  </div><!--/*.col-md-12-->
<div class="col-md-12">
  <div class="checkbox">
  <label for="checkspam">
  <input type="checkbox" name="antispam" id="checkspam"style="text-align: left">Je suis un spammer et je l'assume!
  </label>
  </div>
  </div><!--/*.col-md-12-->
<div class="col-md-12">
  <button type='submit' class='btn btn-primary'style="float: left;">Envoyer</button>
  </div><!--/*.col-md-12-->
</div><!--/*.row-->
  </form>
</div><!--/*.container-->
  <!-- END CONTENT -->
  <div class="w3-container w3-black w3-center w3-opacity">
    <p style="font-size: 50px; font-family: grobold">FOOTER</p>
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-black">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
  </html>
  <?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);