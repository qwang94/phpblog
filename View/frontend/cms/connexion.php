<?php 
  if(isset($_SESSION["loggedin"]) && $_SESSION['loggedin'] === true){
    header('Location: /?action=post&id=' . $postId);
  }

  $title = 'Connexion'; 
  $image = 'post-sample-image.jpg';
  $pageTitle = null;
  $pageSubTitle = null; 
  $author = null;
  $plus = null;
  $date = null;
?>

<?php 
    ob_start(); 
    require __DIR__.'/../partials/header.php'; 
?>

<head>
  <link href="../../../public/css/blog-styles.css" rel="stylesheet" />
</head>

<main class="form-signin">
  <form action="/?action=login" method="POST">
    <h1 class="h3 mb-3 fw-normal">Connectez-vous</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Votre adresse email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe" name="password">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Je me connecte</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>
<?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/../partials/template.php'; ?>
<?php require __DIR__.'/../partials/footer.php'; ?>