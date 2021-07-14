<?php 
    $title = 'Publiez votre post'; 
    $image = 'home-bg.jpg';
    $pageTitle = 'Publiez';
    $pageSubTitle = 'Votre post ici';
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
<h1 class="justify-content-center">Publier votre post</h1>
<form action="/?action=addPost" method="POST">   
    <div class="item">
        <p>Titre du Post</p>
        <input type="text" name="title" required />
    </div>
    <div class="item">
        <p>Sous-titre</p>
        <input type="text" name="subtitle" required />
    </div>
    <div class="item">
        <p>Contenu</p>
        <textarea rows="3" required name="content"></textarea>
    </div>

    <div class="btn-block">
        <button type="submit" href="/">Publier</button>
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/../partials/template.php'; ?>
<?php require __DIR__.'/../partials/footer.php'; ?>