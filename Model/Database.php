<?php

namespace Model;

class Database
{
    // connexion à la base de données
    private $host = "localhost";
    //************ a changer
    private $db_name = "doc_crash";
    private $username = "root";
    private $password = "";
    private $connexion = null;

    // getter pour la connexion
    public function bddConnect()
    {
        try {
            $this->connexion = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (\PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->connexion;
    }
}
