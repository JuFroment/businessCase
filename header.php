<div class="container">
    <div class="row d-flex justify-content-between align-items-center headerIcons p-2">
        <!--Social medias-->
        <div class="col-2">
            <div class="row d-flex justify-content-around social-media ">
                <a href="https://www.facebook.com" class="d-flex align-items-center justify-content-center"><i
                            class="fab fa-facebook-f "></i></a>
                <a href="https://www.twitter.com" class="d-flex align-items-center justify-content-center"><i
                            class="fab fa-twitter "></i></a>
                <a href="https://www.instagram.com" class="d-flex align-items-center justify-content-center"><i
                            class="fab fa-instagram "></i></a>
            </div>
        </div>
        <!--Logo & Titre-->
        <div class="col-4 d-flex align-items-center justify-content-evenly">
            <a href="index.php"><img src="images/finalLogo.png" alt="Le logo : un singe à lunettes" width="100px"
                                     height="100px"></a>
            <a href="index.php" class="h1Link"><h1 class="ms-3">La Nîmes'alerie</h1></a>
        </div>
        <!--Connexion-->
        <div class="col-3 d-flex justify-content-end">
            <div class="row flex-column ">
                <button type="submit" class="btn text-white ms-5 my-2 headerConnect offset 4 col-8">SE CONNECTER
                </button>
                <a href="register.php" class="col-12 ms-4 my-2 registerLink">Pas de compte ? Créez-en un !</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row d-flex justify-content-center headerMenu py-5">
        <div class="col-6 text-white">
            <nav class="navbar navbar-dark navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" "></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 d-flex ">
                            <li class="nav-item mx-3">
                                <a class="nav-link
                                <?php
                                $uri = $_SERVER['REQUEST_URI'];
                                if ($uri == "/newBC/index.php") {
                                    echo("activeNavLink");
                                } else {
                                    echo("nonActiveLink");
                                }
                                ?>
                                " href="index.php" tabindex="-1">ACCUEIL</a>

                            </li>
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle
                                <?php
                                $uri = $_SERVER['REQUEST_URI'];
                                if ($uri == "/newBC/boutique.php") {
                                    echo("activeNavLink");
                                } else {
                                    echo("nonActiveLink");
                                }
                                ?>" href="boutique.php" id="navbarDropdown"
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    BOUTIQUE
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="boutique.php">Accueil Boutique</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    >
                                    <li><a class="dropdown-item" href="#">Chiens</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Chats</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Reptiles</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Oiseaux</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Rongeurs & Co</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle
                                <?php
                                $uri = $_SERVER['REQUEST_URI'];
                                if ($uri == "/newBC/nos-prestations.php") {
                                    echo("activeNavLink");
                                } else {
                                    echo("nonActiveLink");
                                }
                                ?>" href="nos-prestations.php" id="navbarDropdown"
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    NOS PRESTATIONS
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="nos-prestations.php">Un voyage...sur la lune
                                            ?!</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="nos-prestations.php">Toilettage</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="nos-prestations.php">Gardiennage</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link
                                <?php
                                $uri = $_SERVER['REQUEST_URI'];
                                if ($uri == "/newBC/contact.php") {
                                    echo("activeNavLink");
                                } else {
                                    echo("nonActiveLink");
                                }
                                ?>" href="contact.php" tabindex="-1">CONTACT</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <form class="d-flex justify-content-center mt-4">
                <input class="form-control me-2" id="searchBar" type="search" placeholder="Que recherchez-vous ?"
                       aria-label="Search">
                <button class="btn btn-outline-danger btnSearch" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
</div>