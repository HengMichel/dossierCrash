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
                    <a class="nav-link link-light" href="<?= addLink("user","new") ?>">S'inscrire</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link link-light" href="<?= addLink("login","login") ?>">Se connecter</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link link-light" href="<?= addLink("login","deconnexion") ?>">Se déconnecter</a>
                </li> -->

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu link-light">
                        <li><a class="dropdown-item fw-medium link-danger" href="#">Action</a></li>
                        <li><a class="dropdown-item fw-medium link-danger" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item fw-medium link-danger" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled link-light" aria-disabled="true">Disabled</a>
                </li>

                <?php
                if (isset($_SESSION['user']) || (isset($_SESSION['niveau']) && $_SESSION['niveau'] === 'admin')) {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link fw-bolder link-warning" href="' . addLink("login", "deconnexion") . '">Se déconnecter</a>';
                    echo '</li>';
                    }
                ?>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-danger" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

