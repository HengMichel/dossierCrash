<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= addLink("home") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="<?= addLink("user","new") ?>">Sign up</a>
                </li>
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
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-danger" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

