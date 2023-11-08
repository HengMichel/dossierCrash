<?php

/* ⚠ Il faut inclure le fichier autoload AVANT d'exécuter la fonction session_start() sinon il y aura
        une error si on essaye de stocker un objet dans la variable superglobale $_SESSION */
require "autoload.php";
include __DIR__ . "/functions.inc.php";
define("ROOT", "/");
define("ROLE_USER", 10);
define("ROLE_ADMIN", 50);

// Vérifier si l'utilisateur a demandé la déconnexion
if (isset($_GET['action']) && $_GET['action'] === 'deconnexion') {
        // Détruire la session
        session_start(); // Assurez-vous que session_start() est appelé ici
        session_destroy();
        header("Location: /connexion"); // Redirigez l'utilisateur vers la page de connexion
        exit();
    }
    
    // Continuez avec session_start() après avoir géré la déconnexion
session_start();