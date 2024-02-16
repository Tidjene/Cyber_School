<html>
  <head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width">  
    <title>Données formulaire</title>
  <link href="donneesinscription.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>
     <nav class="navbar">
    <ul class="list">
        <li><a href="index.php">Home</a></li>
        <li><a href="formation.php">Formations</a></li>
        <li><a href="formulaire.php">Informations</a></li>
        <li><a href="inscription.php">Inscription</a></li>
        <li><a href="propos.php">About us</a></li> 
      </ul  
    </nav>
   <p><b>Votre demande a bien été envoyée.Nous vous 
répondrons dans un délais de 48h.</b></p>

  <p><h2>Vos informations :</h2><br></p>
   <?php
 if(isset($_GET['nom'])){
   $nom=$_GET['nom'];
 echo 'Nom:'.htmlspecialchars($nom);
 }?><br>
    <?php
   if(isset($_GET['prenom'])){
   $prenom=$_GET['prenom'];
     /* utilisation de htmlspecialchars pour se protéger da la faille XSS */
 echo 'Prenom:'.htmlspecialchars($prenom);
 }?><br>
  <?php
   if(isset($_GET['sexe'])){
   $sexe=$_GET['sexe'];
 echo 'Sexe:'.htmlspecialchars($sexe);
 }?><br>
  <?php
   if(isset($_GET['date'])){
   $date=$_GET['date'];
 echo 'Date de naissance:'.htmlspecialchars($date) ;
 }?><br>
  <?php
   if(isset($_GET['nationalite'])){
   $nationalite=$_GET['nationalite'];
 echo 'Prenom:'.htmlspecialchars($nationalite);
 }  ?><br>
  <?php
     if(isset($_GET['email'])){
   $email=$_GET['email'];
 echo 'Adresse mail:'.htmlspecialchars($email);
 }  ?><br>
     <?php  if(isset($_GET['commentaire'])){
   $commentaire=$_GET['commentaire'];
 echo "Le message de l'expediteur:".htmlspecialchars($commentaire);
 }  
?> 
        <hr class="ligne">
     <footer>
      <h1>Contactez nous sur:</h1>
     <b> <a href="https://www.facebook.com/tidiano.odglecharo?mibextid=LQQJ4d"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://instagram.com/tidianoodg?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-square-instagram"></i></a>
      <a href="http://linkedin.com/in/tidjène-ouédraogo-783587244"><i class="fa-brands fa-linkedin"></i></a>
      <a href="https://twitter.com/tidjene"><i class="fa-brands fa-square-twitter"></i></a>
     </b>
    </footer>

  </body>
</html>