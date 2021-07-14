<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/?action=listPosts">Qichao's Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/?action=listPosts">Retour sur le blog</a></li>
                <?php 
                    if(isset($_SESSION["loggedin"])  && $_SESSION["loggedin"] == true ) {
                ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/?action=myAccount">Mon compte</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/?action=logout">Se déconnecter</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/?action=postAdd">Publier un poste</a></li>
                <?php        
                    } else {
                ?>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/?action=connexion">Se connecter</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/?action=subscription">Créer un compte</a></li>
                <?php        
                    }
                ?>
                
                
            </ul>
        </div>
    </div>
</nav>
<header class="masthead" style="background-image: url('../../../public/images/<?= $image ?>')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1><?= $pageTitle ?></h1>
                    <span class="subheading"><?= $pageSubTitle ?></span>
                    <span class="meta">
                        <?= $plus ?> 
                        <?= $author ?>
                        <?= $date ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>