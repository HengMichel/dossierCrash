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
    public function edit($id)
    {
        
    }

    public function show($id)
    {
        
    }



    public function log($mail, $mdp)
    {
        $authenticatedUser = $this->user->authenticate($mail, $mdp);
    
        if ($authenticatedUser) {
            return redirection(addLink("home"));
        } else {
            return $this->render("security/login.html.php", [
                "h1" => "Se connecter",
                "user" => $this->user,
            ]);
        }
    }    


}
