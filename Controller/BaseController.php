<?php

namespace Controller;


use Service\Session;

abstract class BaseController
{
    public function render(string $fichier, array $parametres = [])
    {
        extract($parametres);
        include "public/header.html.php";
        include "views/$fichier";
        include "public/footer.html.php";
    }

    public function redirect($url)
    {
        header("Location: $url");
        exit();
    }

    public function getUser()
    {
        $user = Session::isConnected();

        if (!$user) {
            $this->redirect("/error/403.php");
        }
        return $user;
    }

    public function getAdmin()
    {
        $user = Session::isAdmin();

        if (!$user) {
            $this->redirect("/error/403.php");
        }
        return $user;
    }

    public function setMessage($type, $message)
    {
        Session::addMessage($type, $message);
    }
}
