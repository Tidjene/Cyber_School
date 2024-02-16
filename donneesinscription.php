<html>
  <head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width">    <title>Cyber School</title>
    <title>Données inscription</title>
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
  <p><h4>VOS INFORMATIONS:</h4> </p>
   <br><?php
 if(isset($_POST['nom'])){
   $nom=$_POST['nom'];
 echo 'Nom:'.htmlspecialchars($nom);
 }?><br><?php
   if(isset($_POST['prenom'])){
   $prenom=$_POST['prenom'];
 echo 'Prenom:'.htmlspecialchars($prenom);}
?><br><?php
   if(isset($_POST['sexe'])){
   $sexe=$_POST['sexe'];
 echo 'Sexe:'.htmlspecialchars($sexe);}
?><br><?php
   if(isset($_POST['date'])){
   $date=$_POST['date'];
 echo 'Date de naissance:'.htmlspecialchars($date);
 }
?><br><?php
     if(isset($_POST['nationalite'])){
   $nationalite=$_POST['nationalite'];
 echo 'Nationalite:'.htmlspecialchars($nationalite);
 } 
?><br><?php
     if(isset($_POST['email'])){
   $email=$_POST['email'];
 echo 'Adresse mail:'.htmlspecialchars($email);
 }   
?><br><?php
   if(isset($_POST['cycle'])){
   $cycle=$_POST['cycle'];
 echo 'Cycle:'.htmlspecialchars($cycle);
 }
?><br><?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['CV'])) {
  $file_name = $_FILES['CV']['name'];
  $file_size = $_FILES['CV']['size'];
  $file_tmp = $_FILES['CV']['tmp_name'];
  $file_type = $_FILES['CV']['type'];
  $file_error = $_FILES['CV']['error'];
  move_uploaded_file($file_tmp, $file_name);
  echo "le CV $file_name a été téléchargé avec succès !";
}?><br><?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['motivation'])) {
  $file_name = $_FILES['motivation']['name'];
  $file_size = $_FILES['motivation']['size'];
  $file_tmp = $_FILES['motivation']['tmp_name'];
  $file_type = $_FILES['motivation']['type'];
  $file_error = $_FILES['motivation']['error'];
  move_uploaded_file($file_tmp, $file_name);
  echo "La lettre de motivation $file_name a été téléchargée avec succès !";
}
?><br><?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['note1'])) {
  $file_name = $_FILES['note1']['name'];
  $file_size = $_FILES['note1']['size'];
  $file_tmp = $_FILES['note1']['tmp_name'];
  $file_type = $_FILES['note1']['type'];
  $file_error = $_FILES['note1']['error'];
  move_uploaded_file($file_tmp, $file_name);
  echo "Relevees de notes 1 $file_name téléchargé avec succès !";
}
?><br><?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['note2'])) {
  $file_name = $_FILES['note2']['name'];
  $file_size = $_FILES['note2']['size'];
  $file_tmp = $_FILES['note2']['tmp_name'];
  $file_type = $_FILES['note2']['type'];
  $file_error = $_FILES['note2']['error'];
  move_uploaded_file($file_tmp, $file_name);
  echo "Relevees de notes 2 $file_name téléchargé avec succès !";
}?><br><?php
if(isset($_POST['commentaire'])){
   $commentaire=$_POST['commentaire'];
 echo "Les attentes du candidat:".htmlspecialchars($commentaire);
 }  
?>
</body>
</html>
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