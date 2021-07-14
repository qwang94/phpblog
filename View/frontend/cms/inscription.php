<?php 
    $title = 'Publication'; 
    $image = 'post-sample-image.jpg';
    $pageTitle = null;
    $pageSubTitle = null;
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

<style>
    .center {
        text-align: center;
    }
    .center input {
        margin-top: 20px;
    }
</style>



<div class="wrapper">
    <div class="center">
        <h2>Inscription</h2>
        <p>Veruillez remplir ces champs pour créer un compte.</p>
    </div>    

    <form action="/?action=subscription_new" method="post">
        <div class="form-group">
            <label>Nom d'utilisateur</label>
            <input type="text" name="username" class="form-control" placeholder="Votre username">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Votre email">
        </div>        
        <div class="form-group">
            <label>Mot de Passe</label>
            <input type="password" name="password" class="form-control" placeholder="Votre mot de passe">
        </div>
        <div class="form-group">
            <label>Confirmez Votre Mot de Passe</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirmez votre mot de passe">
        </div>
        <div class="form-group center">
            <input type="submit" class="btn btn-success" value="Je m'inscris">
            <input type="reset" class="btn btn-secondary ml-2" value="Réinitialiser">
            <p>Vous avez déjà un compte? <a href="connexion.php">Connectez-vous</a>.</p>
        </div>
        
    </form>
</div>    

<?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/../partials/template.php'; ?>
<?php require __DIR__.'/../partials/footer.php'; ?>