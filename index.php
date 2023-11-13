<?php

require "inc/init.inc.php";

use Controller\UserController;
use Model\Repository\UserRepository;
use Form\UserHandleRequest;
use Model\Entity\User;


// URL: index.php?controller=user&method=update&id=32
$controllerName = $_GET["controller"] ?? "home";
$method = $_GET["method"] ?? "liste";
$id = $_GET["id"] ?? null;

$mail = $_GET["mail"] ?? null;
$mdp = $_GET["mdp"] ?? null;

$classController = "Controller\\" . ucfirst($controllerName) . "Controller";

// Instanciation des dépendances
$userRepository = new UserRepository();
$userHandleRequest = new UserHandleRequest($userRepository);
$user = new User();

try {
    // Instanciation du contrôleur en fournissant les dépendances
    $controller = new $classController($userRepository, $userHandleRequest, $user);

    // Appel de la méthode log avec les paramètres appropriés
    if ($method === 'log') {
        $controller->log($mail, $mdp);
    } else {
        // Appel de la méthode correspondante
        $controller->$method($id);
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

