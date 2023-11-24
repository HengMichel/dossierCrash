<?php

namespace Form;

use Service\Session;
use Model\Entity\User;
use Model\Repository\UserRepository;

class UserHandleRequest extends BaseHandleRequest
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository  = new UserRepository;
    }

    public function handleForm(User $user)
    {
        if (isset($_POST['submit'])) {

            extract($_POST);
            $errors = [];

            // Vérification de la validité du formulaire
            if (empty($pseudo)) {
                $errors[] = "Le pseudo ne peut pas être vide";
            }
            if (strlen($pseudo) < 4) {
                $errors[] = "Le pseudo doit avoir au moins 4 caractères";
            }
            if (strlen($pseudo) > 20) {
                $errors[] = "Le pseudo ne peut avoir plus de 20 caractères";
            }

            if (!strpos($pseudo, " ") === false) {
                $errors[] = "Les espaces ne sont pas autorisés pour le pseudo";
            }

            // Est-ce que le pseudo existe déjà dans la bdd ?

            // $requete = $this->userRepository->findByPseudo($pseudo);
            $requete = $this->userRepository->findByAttributes($user, ["pseudo" => $pseudo]);
            if ($requete) {
                $errors[] = "Le pseudo existe déjà, veuillez en choisir un nouveau";
            }

            if (!empty($nom)) {
                if (strlen($nom) < 2) {
                    $errors[] = "Le nom doit avoir au moins 2 caractères";
                }
                if (strlen($nom) > 30) {
                    $errors[] = "Le nom ne peut avoir plus de 30 caractères";
                }
            }
            if (!empty($prenom)) {
                if (strlen($prenom) < 2) {
                    $errors[] = "Le prénom doit avoir au moins 2 caractères";
                }
                if (strlen($prenom) > 30) {
                    $errors[] = "Le prénom ne peut avoir plus de 30 caractères";
                }
            }
            if (empty($mdp)) {
                $errors[] = "Le mot de passe ne peut pas être vide";
            }

            if (empty($errors)) {
                $user->setMdp(password_hash($mdp, PASSWORD_DEFAULT));
                $user->setPseudo($pseudo);
                $user->setNom($nom);
                $user->setPrenom($prenom);
                return true;
            }

            $this->setEerrorsForm($errors);
        }
    }

    // public function handleUpdate($id)
    // {
    //     if (isset($_GET['idUser'])) {

    //         $idUser = htmlspecialchars($_GET['idUser']);
        
    //         User::UserById($idUser);
    //     }
    // }
    // public function handleSecurity($mail,$mdp)
    // {
    //     if (isset($_POST['submit'])) {
    //         $mail = htmlspecialchars($_POST['mail']);
    //         $mdp = htmlspecialchars($_POST['mdp']);
        
            // appeler la methode isConnected de la classe User
            // Session::isConnected($mail,$mdp);
            // cette syntaxe uniquement pour appeler les méthodes static.
            // la méthode isConnected étant static donc on utilise le nom de la classe suivi de "::" ensuite le nom de la méthode qui est isConnected .
   
        // }
        // debug($_SESSION);

        // d_die($_SESSION);
        
    // }

    public function handleSecurity($mail, $mdp)
    {
    if (isset($_POST['submit'])) {
        // Validez les données du formulaire

        // Vérifiez les informations d'identification dans la base de données
        $user = $this->userRepository->findByAttributes(["mail" => $mail]);
        if ($user && password_verify($mdp, $user->getMdp())) {
            // Informations d'identification correctes

            // Activez la session utilisateur
            session_start();
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_mail'] = $user->getMail();

            // Redirigez l'utilisateur vers la page d'accueil ou le tableau de bord
            header('Location: index.php'); // Changez index.php par le chemin de votre page principale
            exit();
        } else {
            // Informations d'identification incorrectes, affichez un message d'erreur
            echo "Identifiants incorrects.";
        }
    }
}

}