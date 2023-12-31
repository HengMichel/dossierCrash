<?php

namespace Controller;

use Model\Entity\User;
use Model\Repository\UserRepository;
use Form\UserHandleRequest;

class UserController extends BaseController
{
    private $userRepository;
    private $form;
    private $user;

    public function __construct()
    {
        $this->userRepository = new UserRepository;
        $this->form = new UserHandleRequest;
        $this->user = new User;
    }
    public function liste()
    {
        $users = $this->userRepository->findAll($this->user);

        $this->render("user/index.html.php", [
            "h1" => "Liste des utilisateurs",
            "users" => $users
        ]);
    }

    public function new()
    {
        $user = $this->user;
        $this->form->handleForm($user);

        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $this->userRepository->insertUser($user);
            return redirection(addLink("home"));
        }

        $errors = $this->form->getEerrorsForm();

        return $this->render("user/form.html.php", [
            "h1" => "Ajouter un nouvel utilisateur",
            "user" => $user,
            "errors" => $errors
        ]);
    }

    public function edit($id)
    {
        
    }

    public function show($id)
    {
        
    }
      
    public function login()
    {

        return $this->render("security/login.html.php", [
         "h1" => "Se connecter",
                "user" => $this->user,
        ]);
    } 

    public function handleSecurity()
    {
        $user = $this->userRepository->findByAttributes($this->user);

        return $this->render("home.html.php", [
            "h1" => "vous êtes connecté",
                   "user" =>$user,
           ]);
           
            return $this->render("security/login.html.php", [
                "h1" => "vous n'êtes connecté",
                       "user" => $user,
               ]);
           
    }
    public function checkLoginStatus() {
        // Vérifiez si l'utilisateur est connecté
        if (isset($_SESSION['user_id'])) {
            return true;
        } else {
            return false;
        }
    }
}