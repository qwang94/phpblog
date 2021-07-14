<?php 
    $title = null; 
    $image = 'home-bg.jpg';
    $pageTitle = null;
    $pageSubTitle = null;
    $author = null;
    $plus = null;
    $date = null;
?>

<head>
    <link href="../../../public/css/blog-styles.css" rel="stylesheet" />    
    <link href="../../../public/css/createpost.css" rel="stylesheet" />
</head>

<?php 
    ob_start(); 
    require __DIR__.'/../partials/header.php';
?>
<h1 class="justify-content-center">Editer votre post</h1>
<form action="/?action=editPost&amp;id=<?= $post['id'] ?>" method="POST">   
    <div class="item">
        <p>Titre du Post</p>
        <input type="text" name="title" required value="<?= nl2br(htmlspecialchars($post['title'])) ?>"/>
    </div>
    <div class="item">
        <p>Sous-titre</p>
        <input type="text" name="subtitle" required value="<?= nl2br(htmlspecialchars($post['subtitle'])) ?>"/>
    </div>
    <div class="item">
        <p>Contenu</p>
        <textarea rows="3" required name="content"><?= nl2br(htmlspecialchars($post['content'])) ?></textarea>
    </div>

    <div class="btn-block">
        <button type="submit" href="/">Enregistrer</button>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/../partials/template.php'; ?>
<?php require __DIR__.'/../partials/footer.php'; ?>