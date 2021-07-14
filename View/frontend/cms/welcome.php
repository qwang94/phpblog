<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:". __DIR__."/cms/connexion.php");
        exit;
    }
    $title = 'Espace Personnel - '. htmlspecialchars($_SESSION["username"]); 
    $image = 'post-sample-image.jpg';
    $pageTitle = 'Hello ' . htmlspecialchars($_SESSION["username"]);
    $pageSubTitle = 'Bienvenue dans votre espace personnel'; 
    $author = null;
    $plus = null;
    $date = null;

?>
<head>
  <link href="../../../public/css/blog-styles.css" rel="stylesheet" />
</head>
<?php 
    ob_start(); 
    require __DIR__.'/../partials/header.php'; 
?>

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <?php
                while($data = $myPosts->fetch())
                {
                    
            ?>  
                <div class="post-preview">
                    <a href="/?action=post&amp;id=<?= $data['id'] ?>">
                        <h2 class="post-title"><?= htmlspecialchars($data['title']) ?></h2>
                        <h3 class="post-subtitle"><?= nl2br(htmlspecialchars($data['subtitle'])) ?></h3>
                    </a>
                    <a href="/?action=commentValidate&amp;id=<?= $data['id'] ?>" class="btn btn-warning small">Voir commentaires</a>
                    <a href="/?action=postEdit&amp;id=<?= $data['id'] ?>" class="btn btn-success small">Modifier le post</a>
                </div>
                <hr class="my-4" />
            <?php
            }
            $myPosts->closeCursor();
            ?>
        </div>
    </div>
    <?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/../partials/template.php'; ?>
<?php require __DIR__.'/../partials/footer.php'; ?>