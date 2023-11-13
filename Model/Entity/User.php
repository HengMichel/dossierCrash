<?php

namespace Model\Entity;

class User extends BaseEntity
{
    private $niveau;
    private $nom;
    private $prenom;
    private $mail;
    private $adresse;
    private $tel;
    private $mdp;
    private $anniversaire;
    // private $pseudo;

     /**
     * Get the value of niveau
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
    /**
     * Set the value of niveau
     *
     * @return  self
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }
    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    /**
     * Get the value of mail
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Set the value of mail
     *
     * @return  self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
    /**
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * Set the value of adresse
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }
    /**
     * Set the value of tel
     *
     * @return  self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }
    /**
     * Get the value of mdp
     */
    public function getMdp()
    {
        return $this->mdp;
    }
    /**
     * Set the value of mdp
     *
     * @return  self
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
    /**
     * Get the value of anniversaire
     */
    public function getAnniversaire()
    {
        return $this->anniversaire;
    }
    /**
     * Set the value of anniversaire
     *
     * @return  self
     */
    public function setAnniversaire($anniversaire)
    {
        $this->anniversaire = $anniversaire;

        return $this;
    }
    
    




    /**
    * Authenticate the user based on email and password.
    *
    * @param string $mail
    * @param string $mdp
    * @return User|false Return the authenticated user or false if authentication fails.
    */
    public function authenticate($mail, $mdp)
    {
        // Comparer le mail du formulaire avec celui de l'objet User
        if ($mail === $this->getMail() && password_verify($mdp, $this->getMdp())) {
            // L'utilisateur est authentifié
            return $this;
        }
        // Échec de l'authentification
        return false;
    }





   
    /**
     * Get the value of pseudo
     */
    // public function getPseudo()
    // {
    //     return $this->pseudo;
    // }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */
    // public function setPseudo($pseudo)
    // {
    //     $this->pseudo = $pseudo;

    //     return $this;
    // }
}
