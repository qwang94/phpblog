<?php
require_once('model/CrmManager.php');

use OpenClassrooms\Blog\Model\CrmManager;

function register($username, $email, $password) {
    $crmManager = new CrmManager;
    $user =$crmManager->subscription($username, $email, $password);

    if($user == false) {
        throw new Exception('Impossible de créer votre compte');
    }
}

function login($email, $password) {
    $crmManager = new CrmManager;
    $crmManager->login($email, $password); 
}

function logout() {
    $crmManager = new CrmManager;
    $crmManager->logout();
    header('Location: /?action=connexion');
}