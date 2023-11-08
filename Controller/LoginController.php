<?php
namespace Controller;

use Form\UserHandleRequest;
use Controller\BaseController;

class LoginController extends BaseController
{
    private $form;

    public function __construct()
    {
        $this->form = new UserHandleRequest;
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $mail = $_POST['mail']; 
            $mdp = $_POST['mdp']; 
    
            // Validez les données du formulaire et authentifiez l'utilisateur
            if ($this->authenticateUser($mail, $mdp)) {
                // Redirigez l'utilisateur après la connexion réussie
                header("Location: /home"); // Remplacez "/home" par l'URL de votre choix
                exit();
            } else {
                // Les informations de connexion sont incorrectes, affichez des erreurs
                $errors = ["Les informations de connexion sont incorrectes."];
            }
        }
    
        // Affichez le formulaire de connexion
        return $this->render("security/login.html.php", [
            // $this->render("login/index.html.php", [
            "h1" => "Se connecter",
            "errors" => $errors ?? []
        ]);
    }
    
    private function authenticateUser($mail, $mdp)
    {
        // Remplacez cette logique par la vérification des informations d'authentification dans votre base de données
        // Si l'authentification réussit, retournez true, sinon retournez false
        // Vous pouvez également stocker les informations de l'utilisateur dans une session ou utiliser un système d'authentification sécurisé.
    }

 
    public function deconnexion()
    {
        // Effectuez la déconnexion, par exemple en détruisant la session ou en utilisant le système d'authentification de votre application
        session_destroy();
        // Redirigez l'utilisateur vers la page de connexion ou vers la page d'accueil après la déconnexion
        header("Location: /login"); // Remplacez "/connexion" par l'URL de votre page de connexion ou de page d'accueil
        exit();
    }

    // ...


    
}
