<?php
$mode = $mode ?? "insertion";
require "views/errors_form.html.php";
?>

<form method="post">

    <div class="row mt-5">
        <div class="form-group col-md-6">
            <label class="niveau fw-medium link-danger" for="niveau">Niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium" value="<?= $user->getNiveau() ?>" <?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>
        <div class="form-group col-md-6">
            <label class="nom fw-medium link-danger" for="nom">nom<sup>*</sup></label>
            <input type="text" name="nom" id="nom" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium" value="<?= $user->getNom() ?>" <?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>
        <div class="form-group mt-3 col-md-6">
            <label class="prenom fw-medium link-danger" for="prenom">Prénom<sup>*</sup></label>
            <input type="text" name="prenom" id="prenom" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium" value="<?= $user->getPrenom() ?>" <?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>
        <div class="form-group mt-3 col-md-6">
            <label class="mail link-danger fw-medium" for="mail">Votre mail :<sup>*</sup></label>
            <input type="email" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium" value="<?= $user->getMail() ?>" <?= $mode == "suppression" ? "disabled" : "" ?> id="mail" name="mail" >
        </div>
        <div class="form-group mt-3 col-md-6">
            <label class="adresse link-danger fw-medium">Votre adresse :<sup>*</sup></label>
            <input type="text" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium" name="adresse" value="<?= $user->getAdresse() ?>" <?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>
        <div class="form-group mt-3 col-md-6">
            <label class="tel link-danger fw-medium" >Votre numéro de téléphone :<sup>*</sup></label>
            <input type="text" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium" name="tel" value="<?= $user->getTel() ?>" <?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>
        <div class="form-group mt-3 col-md-5">
            <label class="mdp link-danger fw-medium" for="mdp">Mot de passe <sup>*</sup></label>
            <input type="text" name="mdp" id="mdp" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium" <?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>
        <div class="form-group mt-3 col-md-5 m-auto">
            <label class="anniversaire link-danger fw-medium" >Votre date de naissance :</label>
            <input type="date" class="form-control border-primary border-4 mt-3 fw-medium link-danger bg-primary-subtle fw-medium" name="anniversaire" value="<?= $user->getAnniversaire() ?>" <?= $mode == "suppression" ? "disabled" : "" ?>>
        </div>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <a href="<?= addLink("user") ?>" class="btn btn-danger">Annuler</a>
        <button type="submit" class="btn btn-primary" name="submit">
            <?= $mode == "suppression" ? "Confirmer" : "Enregistrer" ?>
        </button>
    </div>
</form>