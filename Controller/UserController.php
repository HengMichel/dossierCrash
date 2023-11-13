<?php

namespace Controller;

use Model\Entity\User;
use Form\UserHandleRequest;
use Controller\BaseController;
use Model\Repository\UserRepository;

class UserController extends BaseController
{
    private $userRepository;
    private $form;
    private $user;

    public function __construct(UserRepository $userRepository, UserHandleRequest $form, User $user)
    {
        $this->userRepository = $userRepository;
        $this->form = $form;
        $this->user = $user;
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

        $errors = $this->form->getErrorsForm();

        return $this->render("user/form.html.php", [
            "h1" => "Ajouter un nouvel utilisateur",
            "user" => $user,
            "errors" => $errors
        ]);
    }
  
    public function log($mail, $mdp)
    {
        // Créez une nouvelle instance de l'entité User
        $user = new \Model\Entity\User(); 

        $authenticatedUser = $user->authenticate($mail, $mdp);

        if ($authenticatedUser) {
            \Service\Session::authentication($authenticatedUser);

            return redirection(addLink("home"));
            // echo "Redirecting to home...";
        } else {
            return $this->render("security/login.html.php", [
                "h1" => "Se connecter",
                "user" => $this->user,
            ]);
        }
    }    

    public function logout()
    {
        \Service\Session::logout();
        // Rediriger vers la page d'accueil ou une autre page
        header("Location: index.html.php");
        exit();
    }

    public function handleForm()
    {
        // Passer l'instance de UserRepository à UserHandleRequest
        $userHandleRequest = new UserHandleRequest($this->userRepository);
        // Utilise la même instance de UserHandleRequest créée dans la méthode 'new'
        $user = $this->user;
        $this->form->handleForm($user);
        if ($this->form->isSubmitted() && $this->form->isValid()) {
            $this->userRepository->insertUser($user);
            return redirection(addLink("home"));
            } else {
                $errors = $this->form->getErrorsForm();
                $this->render('user/form.html.php', [
                    'h1' => 'Ajouter un nouvel utilisateur',
                    'user' => $user,
                    'errors' => $errors
                ]);
            }
    }





    public function edit($id)
    {
        
    }

    public function show($id)
    {
        
    }

}