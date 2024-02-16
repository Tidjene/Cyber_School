<?php

session_start();

require('config.php');

// Récupérer les valeurs saisies par l'utilisateur
$username = $_POST['username'];
$password = $_POST['password'];

// Vérifier si les valeurs correspondent aux constantes définies
if ($username == USERNAME_DEFINED && $password == PASSWORD_DEFINED) {
    // Stocker les variables de session
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;

    // Rediriger vers la page pv_deliberation.php
    header('Location: pv_deliberation.php');
    exit();
} else {
    // Rediriger vers la page index.php avec un message d'erreur
    header('Location: index.php?error=1');
    exit();
}

?>