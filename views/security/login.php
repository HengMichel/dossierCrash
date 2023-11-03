<?php
session_start();
 include_once "../views/inc/header.php"; ?>
<div class="container">
    <form action="model/connexion.php" method="post">
        <div class="row">
            <div class="form-group link-warning fw-medium col-6">
                <label class="email bg-dark" for="email">Email :</label>
                <input type="email" class="form-control border-success border-4 mt-3 bg-success-subtle fw-medium" id="email" name="email" >
            </div>
            <div class="form-group link-warning fw-medium col-6">
                <label class="password bg-dark" for="password">Password :</label>
                <input type="password" class="form-control border-success border-4 mt-3 bg-success-subtle fw-medium" id="password" name="password" >
            </div>
        </div>
        <button type="submit" id="bouton" class="btn mt-5 mb-5 fw-bold bg-success border-warning border-4 link-warning" name="submit" value="submit">Submit</button>
    </form>
</div>
<?php include_once "../views/inc/footer.php"; ?>