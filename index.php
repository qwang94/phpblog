<?php
session_start();

require 'Controller/IndexController.php';
require 'Controller/CrmController.php';
require 'Controller/PostController.php';
require 'Controller/CommentController.php';

try { // On essaie de faire des choses
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'allPosts') {
            listAllPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post($_GET['id']);
            }
            else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment'], 0);
                }
                else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'getComment') {
            if (isset($_GET['commentId']) && $_GET['commentId'] > 0) {
                getComment($_GET['commentId']);
            }
            else {
                // Autre exception
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'addPost') {
            if(!empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['content'])) {
                addPost($_POST['title'], $_POST['subtitle'], $_POST['content'], $_SESSION['username']);
            } else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'postEdit') {
            getPostToEdit($_GET['id']);
        }
        elseif ($_GET['action'] == 'editPost') {
            if(!empty($_POST['title']) && !empty($_POST['subtitle']) && !empty($_POST['content'])) {
                editPost($_POST['title'], $_POST['subtitle'], $_POST['content'], $_SESSION['username'], $_GET['id']);
            } else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'commentValidate') {
            getComments($_GET['id']);
        }
        elseif ($_GET['action'] == 'validateComment') {
            validateComment($_GET['id'], $_GET['post_id']);
        }
        elseif ($_GET['action'] == 'invalidateComment') {
           invalidateComment($_GET['id'], $_GET['post_id']);
        }
        elseif ($_GET['action'] == 'deleteComment') {
            deleteComment($_GET['id'], $_GET['post_id']);
        }
        elseif ($_GET['action'] == 'connexion') {
            require __DIR__ . '/View/frontend/cms/connexion.php';
        }
        elseif ($_GET['action'] == 'subscription') {
            require __DIR__ . '/View/frontend/cms/inscription.php';
        }
        elseif ($_GET['action'] == 'subscription_new') {
            if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
                if($_POST['password'] !== $_POST['confirm_password']) {
                    throw new Exception('les mots de passe ne sont pas identiques');
                } else {
                    register($_POST['username'], $_POST['email'], $_POST['password']);
                }
            } else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'myAccount') {
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                getMyPosts($_SESSION['username']);
            }
            else{
                header('location: /?action=connexion');
                die();
            }    
        }
        elseif ($_GET['action'] == 'login') {
            if(!empty($_POST['email']) && !empty($_POST['password'])){
                login($_POST['email'], $_POST['password']);
                getMyPosts($_SESSION['username']);  
            } 
            else {
                throw new Exception('Les champs ne sont pas remplis');
            }
            
        }
        elseif ($_GET['action'] == 'logout') {
            logout();
        }
        elseif ($_GET['action'] == 'postAdd') {
            require __DIR__ . '/View/frontend/post/createPost.php';
        }
    }
    else {
        index();
    }
}
catch(Exception $e) { // S'il y a eu une erreur, alors...
    $errorMessage = $e->getMessage();
    require('View/frontend/errorView.php');
}
