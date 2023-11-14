<?php

namespace Controller;

use Service\Session;
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
            return $this->redirect(addLink("home"));
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
        $authenticatedUser = $this->simulateAuthenticate($mail, $mdp);

        if ($authenticatedUser) {
            Session::authentication($authenticatedUser);
            $this->redirect("home");
        } else {
            return $this->render("security/login.html.php", [
                "h1" => "Se connecter",
                "user" => $this->user,
            ]);
        }
    }    

    public function logout()
    {
        Session::logout();
        // Rediriger vers la page d'accueil ou une autre page
        $this->redirect("index.html.php");

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

    private function simulateAuthentication($mail, $mdp)
    {
        // Vous devrez implémenter la logique d'authentification ici
        // Cela peut impliquer la vérification des informations d'authentification dans la base de données, par exemple.
        // Pour l'instant, nous retournons simplement un utilisateur simulé.
        $simulatedUser = new User();
        $simulatedUser->setMail($mail);
        $simulatedUser->setMdp($mdp); // Note: Cela ne doit pas être fait dans un système réel, c'est une simulation.

        return $simulatedUser;
    }



    public function edit($id)
    {
        
    }

    public function show($id)
    {
        
    }

}