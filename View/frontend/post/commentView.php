<?php 
    $title = $post['title']; 
    $image = 'home-bg.jpg';
    $pageTitle = $post['title'];
    $pageSubTitle = 'Modérez les commentaires ici';
    $author = null;
    $plus = null;
    $date = null;
    $count = 0;
?>

<head>
    <link href="../../../public/css/blog-styles.css" rel="stylesheet" />
</head>
<?php 
    ob_start(); 
    require __DIR__.'/../partials/header.php';
?>  
<div class="table-responsive">
    <table class="table table-striped table-sm mx-auto">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col" class="comment">Commentaire</th>
            <th scope="col">Statut</th>
            <th scope="col">Modérer</th>
        </tr>
        </thead>
        <tbody>
        <?php
       
            while ($comment = $comments->fetch()){ 
                if(count($comment)>0) {
                    $count = $count + 1
        ?>
        <tr>
            <td><?php echo $count; ?></td>
            <td class="comment"><?= $comment['comment'] ?></td>

            <td>
                <?php if($comment['validated'] == 1) { 
                        echo 'En ligne';
                    } else {
                        echo 'A valider';
                    }
                ?>
            </td>
            <td>
                <?php if($comment['validated'] == 1) { ?>
                    <a href="/?action=invalidateComment&amp;id=<?= $comment['id'] ?>&amp;post_id=<?= $post['id'] ?>" class=" btn-warning btn-sm">Cacher le commentaire</a>
                <?php  } else { ?>
                    <a href="/?action=validateComment&amp;id=<?= $comment['id'] ?>&amp;post_id=<?= $post['id'] ?>" class=" btn-success btn-sm">afficher le commentaire</a>
                 <?php } ?>
                    <a href="/?action=deleteComment&amp;id=<?= $comment['id'] ?>&amp;post_id=<?= $post['id'] ?>" class=" btn-danger btn-sm">Supprimer le commentaire</a>
            </td>
        </tr>
        <?php 
            } else { ?>
           
            <?php }} ?>
        </tbody>
    </table>
</div>
<hr>
<div style="text-align: center;">
    <a href="/?action=post&amp;id=<?= $post['id'] ?>" class="btn btn-secondary">Voir le post</a>
    <a href="/?action=myAccount" class="btn btn-primary">Retourner sur la page précédente</a>
</div>



<?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/../partials/template.php'; ?>
<?php require __DIR__.'/../partials/footer.php'; ?>