<?php

require_once('model/CommentManager.php');
require_once('model/PostManager.php');

use OpenClassrooms\Blog\Model\CommentManager;
use OpenClassrooms\Blog\Model\PostManager;

function addComment($postId, $author, $comment, $validated)
{
    $commentManager = new CommentManager;

    $affectedLines = $commentManager->postComment($postId, $author, $comment, $validated);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: /?action=post&id=' . $postId);
    }
}

function getComment($commentId)
{
    $commentManager = new CommentManager;
    $comment = $commentManager->getComment($commentId);
    if ($comment == false) {
        throw new Exception("Le commentaire n'existe pas");
    } else {
        require('view/frontend/commentView.php');
    }
}

function getComments($id)
{
    $postManager = new PostManager;
    $commentManager = new CommentManager;

    $post = $postManager->getPost($id);
    $comments = $commentManager->getAllComments($id);

    require('view/frontend/post/commentView.php');
}


function validateComment($id, $post_id)
{
    $commentManager = new CommentManager;
    $newComment = $commentManager->validateComment($id);

    if(!$newComment) {
        throw new Exception('Quelque chose va mal');
    } else {
        header('Location: /?action=commentValidate&id=' . $post_id);
    }
}

function deleteComment($id, $post_id)
{
    $commentManager = new CommentManager;
    $deletedComment = $commentManager->deleteComment($id);

    if(!$deletedComment) {
        throw new Exception('Quelque chose va mal');
    } else {
        header('Location: /?action=commentValidate&id=' . $post_id);
    }
}

function invalidateComment($id, $post_id)
{
    $commentManager = new CommentManager;
    $newComment = $commentManager->invalidateComment($id);

    if(!$newComment) {
        throw new Exception('Quelque chose va mal');
    } else {
        header('Location: /?action=commentValidate&id=' . $post_id);
    }
}

