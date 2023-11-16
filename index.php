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


$classController = "Controller\\" . ucfirst($controllerName) . "Controller";


try {
    $controller = new $classController;
    // $UserController->update($id);

    $controller->$method($id);
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

