<?php 
    $title = 'Mon blog'; 
    $image = 'post-bg.jpg';
    $pageTitle = $post['title'];
    $pageSubTitle = $post['subtitle'];
    $author = $post['author'];
    $plus = 'Mis à jour par';
    $date = 'le ' . $post['creation_date_fr'];

?>
<head>
    <link href="../../../public/css/blog-styles.css" rel="stylesheet" />
    <link href="../../../public/css/comment-styles.css" rel="stylesheet" />
</head>
<?php 
    ob_start(); 
     require __DIR__.'/../partials/header.php'; 
?>
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>
                    <?= nl2br(htmlspecialchars($post['content'])) ?>
                </p>
            </div>
        </div>
    </div>
</article>
<hr>
<div class="container">
    <div class="be-comment-block">
        <h1 class="comments-title">Comments</h1>
        <?php
        while ($comment = $comments->fetch())
        { if(count($comment)>0) {
        
        ?>
        <div class="be-comment">
            <div class="be-comment-content">
                <span class="be-comment-name">
                    <?= htmlspecialchars($comment['author']) ?>
                </span>		
                <span class="be-comment-time">
                    <i class="fa fa-clock-o"></i>
                    le <?= $comment['comment_date_fr'] ?>
                </span>
                <p class="be-comment-text">
                    <?= nl2br(htmlspecialchars($comment['comment'])) ?>
                </p>
            </div>
        </div>  
        <?php
            } else { ?>
                
                     Aucun commentaire n'a encore été renseigné, soyez le premier à laisser un commentaire.
               
         <?php  
            }
            
        }
        ?>
    </div>
    <form class="form-block" action="/?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group fl_icon">
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <input class="form-input"  id="author" name="author" type="text" placeholder="Votre nom">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 fl_icon">
                <div class="form-group fl_icon">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <input class="form-input" id="email" name="email" type="text" placeholder="Votre adresse email">
                </div>
            </div>
            <div class="col-xs-12">									
                <div class="form-group">
                    <textarea class="form-input" name="comment" required="true" placeholder="Votre commentaire"></textarea>
                </div>
            </div>
            <div class="col-xs-12">	
                <div class="submit-button">
                    <button type="submit" class="btn btn-success">Laisser mon commentaire</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require __DIR__.'/../partials/template.php'; ?>>

<?php require __DIR__.'/../partials/footer.php'; ?>