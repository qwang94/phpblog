<?php $title = 'Qichao WANG - Accueil'; ?>
<head>
    <link href="../../public/css/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../../public/js/script.js"></script>
</head>
<?php ob_start(); ?>
        <nav id="myNavBar" class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav mx-auto">
                        <a class="nav-link active" aria-current="page" href="#about">Moi</a>
                        <a class="nav-link" href="#skills">Compétences</a>
                        <a class="nav-link" href="#experience">Expériences</a>
                        <a class="nav-link" href="#education">éducation</a>
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                        <a class="nav-link" href="#recommandation">Recommandations</a>
                        <a class="nav-link" href="#contact">Contact</a>   
                        <a class="nav-link" href="/?action=listPosts">Posts</a> 
                    </div>
                </div>
            </div>
        </nav>
     
        <section id="about" class="container-fluid">
            <div class="col-xs-8 col-md-4 profile-picture">
                <img src="public/images/photo_qichao_rond.png" alt="Qichao" class="img-circle">
            </div>
            <div class="heading">
                <h1>Hello, Moi c'est Qichao</h1>
                <h3>Développeur WEB</h3>
                <a href="/Cv_Q_WANG.pdf" class="button1">Télécharger CV</a>
            </div>
        </section>
        
        <section id="skills">
            <div class="red-divider"></div>
            <div class="heading">
                <h2>Compétences</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <h5>Html  - Css - Bootstrap 100%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <h5>PHP 80%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <h5>Symfony 80%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                <h5>JavaScript - JQuery 85%</h5>
                            </div>
                        </div>
                        
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                <h5>NodeJS - MongoDB - ExpressJS 70%</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                <h5>WORD - EXCEL - PPT 100%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <h5>PS - AI - INDESIGN 80%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <h5>SEO - SEA - GA 80%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                <h5>PRESTASHOP - WordPress 90%</h5>
                            </div>
                        </div>    
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                <h5>Angular 80%</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="experience">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Expériences et projets Professionnels</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>OPSONE</h3>
                                    <h4>Développeur Full Stack - Symfony</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 02/2021 - Aujourd'hui</p>
                                </div>
                                <div class="timeline-body">
                                    <p><strong>Avantage Courtage :</strong> Maintenance & Développement de fonctionnalités (Front & Back).</p>
                                    <p><strong>WordPress :</strong> Développement des projets WordPress.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>MALAKOFF HUMANIS</h3>
                                    <h4>Digital Product Manager</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 09/2019 - 12/2020</p>
                                </div>
                                <div class="timeline-body">
                                    <p><strong>Gestion de projet :</strong> De l'idéalisation jusqu'à la mise en marché du produit.</p>
                                    <p><strong>Welcome Pack :</strong> Améliorer la satisfaction client tout en réduisant le coût de gestion.</p>
                                    <p><strong>Testamento :</strong> Création d'un simulateur d'aide à la décision B2B2C.</p>
                                    <p><strong>Migration des comptes</strong> Vers un autre Espace client : Collecte et analyse des données liées à la migration et proposition de recommandations.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>Freelance / Autodidacte</h3>
                                    <h4>Développeur web</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small>2020</p>
                                </div>
                                <div class="timeline-body">
                                    <p><strong>Site institutionnel</strong> (WordPress) : <a href="https://www.ateliersfrancochinois.com/" target="_blank"> Atelier Francochinois</a></p>
                                    <p><strong>Site e-commerce vente de thé</strong> (Prestashop) : <a href="https://tianyuanchayin.fr/" target="_blank"> TianYuan ChaYin</a></p>
                                    <p><strong>Todolist </strong>(NodeJs, express, Ejs) : <a href="https://damp-waters-94879.herokuapp.com/" target="_blank"> TodoList</a></p>
                                    <p><strong>RecipeBook</strong> (Angular) : <a href="https://recipebook-60f0f.web.app" target="_blank"> Recipe Book</a></p>
                                    <p><strong>Découvrir les autres projets :</strong> <a href="#portfolio"> ici </a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container-inverted">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>ZEN SUSHI</h3>
                                    <h4>Chef de projet digital</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2017 - 2019</p>
                                </div>
                                <div class="timeline-body">
                                    <p><strong>Refonte du site web :</strong> Plus de 50% de commandes passées par téléphone sont désormais passées en ligne.</p>
                                    <p><strong>Pramétrage :</strong> Google Ads et suivi Analytics.</p>
                                    <p><strong>Mise en place d'un plan de communication digitale :</strong> Encourager les clients à passer la commande en ligne => Réduction de coûts de gestion.</p>
                                    <p><strong>Participation à l'extention du réseau :</strong> 3 restaurants en début du lancement => 9 restaurants en île-de-france.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
                        <div class="timeline-panel-container">
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h3>I@D France</h3>
                                    <h4>Conseiller immobilier indépendant</h4>
                                    <p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2016</p>
                                </div>
                                <div class="timeline-body">
                                    <p>Prospection & Elaboration des annonces de vente.</p>
                                    <p>Visite des biens & Négociation.</p>
                                    <p>Signature de l'acte de vente.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        <section id="education">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>éducations</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="education-block">
                            <h5>2021 - 2022</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>OpenClassrooms</h3>
                            <h4>Développement Frontend</h4>
                            <div class="red-divider"></div>
                            <p>Créer des applications web dynamioques avec JavaScript et React.</p>
                            <p>Mettren en oeuvre des test unitaires et d'intégration et débugger.</p>
                            <p>Communiquer avec le back-end grâce à une API...</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="education-block">
                            <h5>2020 - Aujourd'hui</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>Udemy.com</h3>
                            <h4>Développement Web</h4>
                            <div class="red-divider"></div>
                            <p>Front: HTML/CSS, Javascript, JQuery, Bootstrap.</p>
                            <p>Design: Responsive Design, Web Design, UI UX.</p>
                            <p>Back: NodeJs, MongoDB, ExpressJs, API...</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="education-block">
                            <h5>2019 - 2020</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>Pôle Paris Alternance - Paris</h3>
                            <h4>Master Digital Marketing</h4>
                            <div class="red-divider"></div>
                            <p>Gestion de projet digital et pilotage budgétaire.</p>
                            <p>Conception & Sécurisation d'un site e-commerce.</p>
                            <p>Web design et expérience utilisateur.</p>
                            <p>Mission de consulting dans le digital.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="education-block">
                            <h5>2015 - 2018</h5>
                            <span class="glyphicon glyphicon-education"></span>
                            <h3>ISEE Business School - Nanterre</h3>
                            <h4>Bachelor Marketing Commercial</h4>
                            <div class="red-divider"></div>
                            <p>Fondamentaux du marketing</p>
                            <p>Stratégie de communication digitale et e-publicité</p>
                            <p>Moyens financiers</p>
                            <p>Environnement juridique</p>
                        </div>        
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Portfolio & Centres d'intérêt</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <img class="thumbnail gray"  src="public/images/Musculation.jpg" alt="musculation">
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <img class="thumbnail"  src="public/images/Cuisiner.jpg" alt="cuisiner">
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <img class="thumbnail gray"  src="public/images/badminton.jpg" alt="badminton">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a class="thumbnail" href="http://actrice.qichao-wang.com" target="_blank">
                            <img src="public/images/actrices.png" alt="site actrice">
                        </a>    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="thumbnail" href="http://serpent.qichao-wang.com" target="_blank">
                            <img class="gray" src="public/images/serpent.png" alt="jeu serpent">
                        </a>     
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <a class="thumbnail" href="http://tindog.qichao-wang.com" target="_blank">
                            <img src="public/images/dog-img.jpg" alt="tinder pour les chiens">
                        </a>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a class="thumbnail" href="http://simon-game.qichao-wang.com" target="_blank">
                            <img class="gray" src="public/images/Simon_Game.jpg" alt="jeu de société simon">
                        </a>    
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="thumbnail" href="http://taupe.qichao-wang.com" target="_blank">
                            <img src="public/images/mouse3.jpg" alt="taper la taupe">
                        </a>     
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <a class="thumbnail" href="http://drumkit.qichao-wang.com" target="_blank">
                            <img class="gray" src="public/images/snare.jpg" alt="site pour jouer une music">
                        </a>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a class="thumbnail" href="https://www.ateliersfrancochinois.com" target="_blank">
                            <img src="public/images/ateliers franco chinois.png" alt="ateliersfrancochinois">
                        </a>    
                    </div>
                    <div class="col-lg-4">
                        <a class="thumbnail" href="https://tianyuanchayin.fr" target="_blank">
                            <img class="gray" src="public/images/tianyuan_Image1_min.jpg" alt="tianyuanchayin">
                        </a>     
                    </div>
                    <div class="col-lg-4">
                        <a class="thumbnail" href="https://rocky-sands-96318.herokuapp.com/" target="_blank">
                            <img src="public/images/newsletter-1.png" alt="todolist">
                        </a>     
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a class="thumbnail" href="https://damp-waters-94879.herokuapp.com/" target="_blank">
                            <img class="gray" src="public/images/todolist.png" alt="todolist">
                        </a>    
                    </div>
                    <div class="col-lg-4">
                        <a class="thumbnail" href="https://recipebook-60f0f.web.app/" target="_blank">
                            <img src="public/images/Recipebook.png" alt="recipebook">
                        </a>     
                    </div>
                    <div class="col-lg-4">
                        <a class="thumbnail" href="https://521food.fr/" target="_blank">
                            <img class="gray" src="public/images/521food.png" alt="todolist">
                        </a>     
                    </div>
                </div>
            </div>
        </section>
        <section id="recommandation">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Recommandations</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <h3>"Sérieux, déterminé, qui apprend très vite"</h3>
                            <br>
                        </div>


                        <div class="carousel-item">
                            <h3>"Un chef de produit qui sait coder."</h3>
                            <br>
                        </div>


                        <div class="carousel-item">
                            <h3>"Un développeur qui maitrise la gestion de projets."</h3>
                            <br>
                        </div>
                    </div>
                    <a class="carousel-control-prev left" href="#myCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                      </a>
                      <a class="carousel-control-next right" href="#myCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="false"></span>
                      </a>
                </div>
            </div>
        </section>
        
        <section id="contact">
            <div class="container">
                <div class="white-divider"></div>
                <div class="heading">
                    <h2>Contact</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact-form" method="post" action="/contact.php" role="form" >
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="firstname" >Prénom *</label>
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom">
                                    <p class="comments"></p>
                                </div>

                                <div class="col-md-6">
                                <label for="name" >Nom *</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                                    <p class="comments"></p>
                                </div>

                                <div class="col-md-6">
                                <label for="email" >Email *</label>
                                    <input id="email" name="email" class="form-control" placeholder="Votre email">
                                    <p class="comments"></p>
                                </div>

                                <div class="col-md-6">
                                <label for="phone" >Téléphone</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Votre téléphone">
                                    <p class="comments"></p>
                                </div>

                                <div class="col-md-12">
                                    <label for="message" >Message *</label>
                                    <textarea id="message" name="message" class="form-control" placeholder="Votre message" ></textarea>
                                    <p class="comments"></p>
                                </div>

                                <div class="col-md-12">
                                    <p><strong>* Ces informations sont requises</strong></p>
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" class="button1" value="Envoyer">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="text-center">
            <a href="#about">
                <i class="fas fa-angle-double-up">
                    <p>Revenir en haut</p>
                </i>
            </a>
            <h5>© 2021 Qichao_WANG</h5>
        </footer>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/partials/template.php'; ?>