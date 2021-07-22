<?php

require_once('model/CommentManager.php');
require_once('model/PostManager.php');

use OpenClassrooms\Blog\Model\PostManager;
use OpenClassrooms\Blog\Model\CommentManager;

function listPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->getPosts();

    require('View/frontend/post/listPostsView.php');
}

function listAllPosts()
{
    $postManager = new PostManager;
    $posts = $postManager->getAllPosts();

    require('View/frontend/post/listAllPostsView.php');
}

function getMyPosts($username)
{
    $postManager = new PostManager;
    $myPosts = $postManager->getMyPosts($username);
    
    if($myPosts === false) {
        throw new Exception('aucun post trouvé');
    } 
    
    require('View/frontend/cms/welcome.php');
}

function post($id)
{
    $postManager = new PostManager;
    $commentManager = new CommentManager;

    $post = $postManager->getPost($id);
    $comments = $commentManager->getComments($id);

    require('view/frontend/post/postView.php');
}

function getPostToEdit($id)
{
    $postManager = new PostManager;

    $post = $postManager->getPost($id);

    require('view/frontend/post/postEdit.php');
}

function addPost($title, $subtitle, $content, $author)
{
    $postManager = new PostManager;
    $post = $postManager->addPost($title, $subtitle, $content, $author);

    if($post['content'] === false) {
        throw new Exception('Impossible d\'ajouter le post !');
    }
    else {
        header('Location: /?action=post&id=' . $post['id']);
    }
}

function editPost($title, $subtitle, $content, $author, $post_id)
{
    $postManager = new PostManager;
    $new_post = $postManager->editPost($title, $subtitle, $content, $author, $post_id);

    if(!$new_post) {
        throw new Exception('Quelque chose va mal');
    } else {
        header('Location: /?action=post&id=' . $post_id);
    }
}