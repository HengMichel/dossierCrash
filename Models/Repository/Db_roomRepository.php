<?php
require_once "../database.php";
if(isset($_POST["add_room"])){
    // $hotel = htmlspecialchars($_POST["hotel"]);
    $roomNumber = htmlspecialchars($_POST["room_number"]);
    $roomPrice = htmlspecialchars($_POST["room_price"]);
    $person = htmlspecialchars($_POST["person"]);
    $category = htmlspecialchars($_POST["category"]);

    // traitement de l'image
    $imgName = $_FILES["image"]["name"];
    $tmpName = $_FILES["image"]["tmp_name"];
    
    $destination = $_SERVER["DOCUMENT_ROOT"]."/projetGite/assets/imgs/".$imgName;

    if(move_uploaded_file($tmpName,$destination)){
        //  se connecter a la bd
        $db = dbConnexion();
        // prépare la requete
        $request = $db->prepare("INSERT INTO rooms (room_number,price,room_imgs,persons,category) VALUES (?,?,?,?,?)");
        // executer la requête
        try {
            $request->execute(array($roomNumber,$roomPrice,$imgName,$person,$category));
            // redirection vers list_room.php
            header("Location: http://localhost/projetGite/Controller/room_list.php");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}