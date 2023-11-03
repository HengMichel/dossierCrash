<?php 

namespace Model\Repository;
use Service\Session;

use Database;
use Model\Entity\Inscription;
// require_once "../database.php";

class InscriptionRepository extends BaseRepository
{
    public function insertUser(Inscription $user)
    {
        $sql = "INSERT INTO users (`last_name`, `first_name`, `email`, `password`, `birthday`, `address`, `phone_number`, `gender`) VALUES (?,?,?,?,?,?,?,?)";
        $requete = $this->dbConnection->prepare($sql);
        $requete->bindValue("?", $user->getLast_name());
        $requete->bindValue("?", $user->getFirstname());
        $requete->bindValue("?", $user->getEmail());
        $requete->bindValue("?", $user->getPassword());
        $requete->bindValue("?", $user->getBirthday());
        $requete->bindValue("?", $user->getAddress());
        $requete->bindValue("?", $user->getPhone_number());
        $requete->bindValue("?", $user->getGender());
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

}





// if(isset($_POST["submit"])){
//     // recuperer les infos saisies par le user
//     $lastName = htmlspecialchars($_POST["lastname"]);
//     $firstName = htmlspecialchars($_POST["firstname"]);
//     $email = htmlspecialchars($_POST["email"]);
//     $password = htmlspecialchars($_POST["password"]);
//     $birthday = htmlspecialchars($_POST["birthday"]);
//     $address = htmlspecialchars($_POST["address"]);
//     $phoneNumber = htmlspecialchars($_POST["phone"]);
//     $gender = htmlspecialchars($_POST["gender"]);

    // crypter le mot de passe
    $cryptedPassword = password_hash($password, PASSWORD_DEFAULT);

    // etablir la connexion avec la bd
    $db = dbConnexion();
    // preparer la requete
    // $request = $db->prepare("INSERT INTO users (`last_name`, `first_name`, `email`, `password`, `birthday`, `address`, `phone_number`, `gender`) VALUES (?,?,?,?,?,?,?,?)");
    // executer la requete


    // try {
    //     $request->execute(array($lastName,$firstName,$email,$cryptedPassword,$birthday,$address,$phoneNumber, $gender));
    // } catch (PDOException $e) {
    //     echo $e->getMessage();
    // } 
    // if ($request->execute(array($lastName, $firstName, $email, $cryptedPassword, $birthday, $address, $phoneNumber, $gender))) {

    //     echo "Inscription réussie.";
    // } else {
    //     echo "Erreur lors de l'inscription.";
    // }

    // header("Location: http://localhost/projetGite/Forms/login.php");


// }
?>