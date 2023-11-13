<?php
require_once "Service/Session.php";
use Model\Entity\User;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                    if (isset($_SESSION['user'])) {
                        echo '<li class="nav-item">';
                        if (isset($_SESSION['niveau']) && $_SESSION['niveau'] === 'admin') {
                                                                // pour l'instant le cheminin sera vers index 
                            echo '<a class="nav-link fw-bolder link-primary" href="index.html.php">Admin Home</a>';
                        } else {                                // pour l'instant le cheminin sera vers index
                            echo '<a class="nav-link fw-bolder link-primary" href="index.html.php">Home</a>';
                        }
                        echo '</li>';
                    }
                ?>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= addLink("home") ?>">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= addLink("user","liste") ?>">Liste</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="<?= addLink("user","new") ?>">S'inscrire</a>
                </li>  
            </ul>
            <?php if (\Service\Session::isConnected()) : ?>
                <!-- Si l'utilisateur est connecté, affiche le lien de déconnexion -->
                <li class="but1 list-group"><a class="btn btn-light border-danger link-primary border-3 fw-medium text-decoration-none" href="<?= addLink("user","logout") ?>">Se déconnecter</a></li>
                <?php else : ?>
                <!-- Si l'utilisateur n'est pas connecté, affiche le bouton de connexion -->
                <li class="but1 list-group">
                    <a class="btn btn-light border-danger link-primary border-3 fw-medium text-decoration-none" href="<?= addLink("user","log") ?>">Se connecter</a>
                </li>
            <?php endif; ?>
        </div>
    </div>
</nav>

