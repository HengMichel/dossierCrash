<?php
// function dbConnexion(){
//     $connexion = null;
//     try {
//         $connexion = new PDO("mysql:host=localhost;dbname=gite_db","root","");
//     } catch (PDOException $e) {
//         $connexion = $e->getMessage();
//     }
//     return $connexion;
// }

class Database{

    // une méthode static est une méthods qu'on peut exécuter sans intancier la classe dans laquelle est implémentée (déclaré, défini)

    public static function dbConnect(){
        $conn = null;

        try {
            $conn = new PDO("mysql:host=localhost;dbname=gite_db","root","");
        } catch (PDOException $e) {
            $conn = $e->getMessage();
        }
        return $conn;

    }
}
?>