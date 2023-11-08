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
             // Vérification de la validité du formulaire
             if (empty($mail)) {
                $errors[] = "Le mail ne peut pas être vide";
            }
            if (strlen($mail) < 4) {
                $errors[] = "Le mail doit avoir au moins 4 caractères";
            }
            if (strlen($mail) > 20) {
                $errors[] = "Le mail ne peut avoir plus de 20 caractères";
            }

            if (!strpos($mail, " ") === false) {
                $errors[] = "Les espaces ne sont pas autorisés pour le mail";
            }

            // Est-ce que le mail existe déjà dans la bdd ?

            // $requete = $this->userRepository->findBymail($mail);
            $requete = $this->userRepository->findByAttributes($user, ["mail" => $mail]);
            if ($requete) {
                $errors[] = "Le mail existe déjà, veuillez en choisir un nouveau";
            }
            if (!empty($adresse)) {
                if (strlen($adresse) < 2) {
                    $errors[] = "L'adresse
                    doit avoir au moins 2 caractères";
                }
                if (strlen($adresse) > 30) {
                    $errors[] = "L'adresse ne peut avoir plus de 30 caractères";
                }
                $user->setAdresse($_POST['adresse']);

            }
            if (!empty($tel)) {
                if (strlen($tel) < 10) {
                    $errors[] = "Le numéro de téléphone doit avoir au moins 2 caractères";
                }
                if (strlen($tel) > 30) {
                    $errors[] = "Le numéro de téléphone ne peut avoir plus de 30 caractères";
                }
                $user->setTel($_POST['tel']);

            }
            if (empty($mdp)) {
                $errors[] = "Le mot de passe ne peut pas être vide";
            }
            if (empty($anniversaire)) {
                $errors[] = "La date d'anniversaire ne peut pas être vide";
            }
            $user->setAnniversaire($_POST['anniversaire']);

            if (empty($errors)) {
                $user->setMdp(password_hash($mdp, PASSWORD_DEFAULT));
                $user->setMail($mail);
                $user->setNom($nom);
                $user->setPrenom($prenom);
                return true;
            }

            $this->setErrorsForm($errors);
        }
    }


  







    public function handleUpdate($id)
    {
    }
}