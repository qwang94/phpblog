<?php 
    $title = 'Mon blog'; 
    $image = 'home-bg.jpg';
    $pageTitle = 'Qichao\'s Blog';
    $pageSubTitle = 'Un blog réalisé entièrement avec du PHP';
    $author = null;
    $date = null;
    $plus = null;
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
                while ($data = $posts->fetch())
                {
            ?>  
                <div class="post-preview">
                    <a href="/?action=post&amp;id=<?= $data['id'] ?>">
                        <h2 class="post-title"><?= htmlspecialchars($data['title']) ?></h2>
                        <h3 class="post-subtitle"><?= nl2br(htmlspecialchars($data['subtitle'])) ?></h3>
                    </a>
                    <p class="post-meta">
                        Dernière mise-à-jour par
                        <?= nl2br(htmlspecialchars($data['author'])) ?>
                        le <?= $data['creation_date_fr'] ?>
                    </p>
                </div>
                <hr class="my-4" />
            <?php
            }
            $posts->closeCursor();
            ?>
            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary text-uppercase" href="#!">Les + anciens posts →</a>
            </div>
        </div>
    </div>
    

    <?php $content = ob_get_clean(); ?>

    <?php require __DIR__.'/../partials/template.php'; ?>

</div>
<?php require __DIR__.'/../partials/footer.php'; ?>


