<?php

namespace Model\Repository;

use Model\Entity\User;
use Service\Session;

class UserRepository extends BaseRepository
{
    public function findByPseudo($pseudo)
    {
        $requete = $this->dbConnection->prepare("SELECT * FROM user WHERE pseudo = :pseudo");
        $requete->bindParam(":pseudo", $pseudo);
        if ($requete->execute()) {
            if ($requete->rowCount() == 1) {
                $requete->setFetchMode(\PDO::FETCH_CLASS, "Model\Entity\User");
                return $requete->fetch();
            } else {
                return false;
            }
        } else {
            return null;
        }
    }
    public function insertUser(User $user)
    {
        $sql = "INSERT INTO user (nom, prenom, mail, adresse, tel, mdp, anniversaire) VALUES (:nom, :prenom, :mail, :adresse,:tel,:mdp,:anniversaire)";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue(":nom", $user->getNom());
        $requete->bindValue(":prenom", $user->getPrenom());
        $requete->bindValue(":mail", $user->getMail());
        $requete->bindValue(":adresse", $user->getAdresse());
        $requete->bindValue(":tel", $user->getTel());
        $requete->bindValue(":mdp", $user->getMdp());
        $requete->bindValue(":anniversaire", $user->getAnniversaire());
        $requete = $requete->execute();
        if ($requete) {
            if ($requete == 1) {
                Session::addMessage("success",  "Le nouvel utilisateur a bien été enregistré");
                return true;
            }
            Session::addMessage("danger",  "Erreur : l'utilisateur n'a pas été enregisté");
            return false;
        }
        Session::addMessage("danger",  "Erreur SQL");
        return null;
    }
    public function updateAbonne(User $user)
    {
        $sql = "UPDATE user 
                         SET nom = :nom, prenom = :prenom,  mail = :mail, adresse = :adresse, tel = :tel, mdp = :mdp, anniversaire = :anniversaire
                         WHERE id = :id";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue(":nom", $user->getNom());
        $requete->bindValue(":prenom", $user->getPrenom());
        $requete->bindValue(":mail", $user->getMail());
        $requete->bindValue(":adresse", $user->getAdresse());
        $requete->bindValue(":tel", $user->getTel());
        $requete->bindValue(":mdp", $user->getMdp());
        $requete->bindValue(":anniversaire", $user->getAnniversaire());
        $requete->bindValue(":id", $user->getId());
        $requete = $requete->execute();
        if ($requete) {
            if ($requete == 1) {
                Session::addMessage("success",  "La mise à jour de l'utilisateur a bien été éffectuée");
                return true;
            }
            Session::addMessage("danger",  "Erreur : l'utilisateur n'a pas été mise à jour");
            return false;
        }
        Session::addMessage("danger",  "Erreur SQL");
        return null;
    }
}