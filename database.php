<?php
 $db_dsn="mysql:host=localhost;dbname=donnees_etudiants";
 $login="root";
 $mdp="";
 $option=[
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
 ];
 try{
$maConnexion= new PDO($db_dsn,$login,$mdp,$option);
echo "connexion établie";
$sql=" INSERT INTO donnees_etudiants(Nom,Prénom,Date_de_naissance,Mail)
VALUES ('odg','samira','2023-01-01','sami@gmail.com')";
$maConnexion->query($sql);
}
 
 catch(PDOException $pe){
    echo 'Erreur de connexion   '.$pe->getMessage();
 }
    ?>