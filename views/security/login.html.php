<form action="<?= addLink("user", "new") ?>" method="post">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="mail">Mail :</label>
            <input type="email" name="mail" id="mail" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium">
        </div>
        <div class="form-group col-md-6">
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" class="form-control border-primary border-4 mt-3 bg-primary-subtle fw-medium">
        </div>
    </div>
    <div class="d-flex justify-content-between mt-5">
        <button type="submit" name="login" class="btn btn-light border-danger link-primary border-3 fw-medium text-decoration-none">Soumettre</button>
    </div>
</form>
