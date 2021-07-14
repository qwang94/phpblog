<?php 

namespace OpenClassrooms\Blog\Model;

use Exception;

require_once("Model/Manager.php");

class CrmManager extends Manager {

    public function subscription($username, $email, $password) 
    {
        $db = $this->dbConnect();

        $usernameCheck = "SELECT id FROM users WHERE username = ?";
        $emailCheck = "SELECT id FROM users WHERE email = ?";
        
        if($stmt = $db->prepare($usernameCheck)) {
            $param_username = trim($_POST['username']);
            $stmt->bindParam(1, $param_username, \PDO::PARAM_STR);

            if($stmt->execute()){
                if($stmt->rowCount() == 1) {
                    throw new Exception('Ce nom d\'utilisation a déjà été pris.');
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                throw new Exception("Opps, Un anomalie est apparu - username");
            } 

            unset($stmt);
        }

        if($stmt = $db->prepare($emailCheck)) {
            $param_email = trim($_POST['email']);
            $stmt->bindParam(1, $param_email, \PDO::PARAM_STR);

            if($stmt->execute()){
                if($stmt->rowCount() == 1) {
                    throw new Exception('Cet email a déjà été pris.');
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                throw new Exception("Opps, Un anomalie est apparu - email");
            }

            unset($stmt);
        }

        $insertSql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        
        if($stmt = $db->prepare($insertSql)) {
            $stmt->bindParam(1, $username,  \PDO::PARAM_STR);
            $stmt->bindParam(2, $email, \PDO::PARAM_STR);
            $stmt->bindParam(3, password_hash($password, PASSWORD_DEFAULT), \PDO::PARAM_STR);

            if($stmt->execute()) {
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $username;
                header("location: /?action=myAccount");
            } else {
                throw new Exception("Oops! Une erreur autre est apparue dans l'inscription");
            }
        }
    }

    public function login($email, $password)
    {
        $db = $this->dbConnect();
        $sql = "SELECT email, password FROM users WHERE email = '$email'";
        
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            if($stmt = $db->prepare($sql)) {
                $stmt->bindParam(1, $email, \PDO::PARAM_STR);
    
                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        if($row = $stmt->fetch()){
                            $email = $row['email'];
                            $hashed_password = $row['password'];
                            if(password_verify($password, $hashed_password)){
                                if (session_status() == PHP_SESSION_NONE) {
                                    session_start();
                                }

                                $_SESSION["loggedin"] = true;
                                $_SESSION["email"] = $email;

                                $username_query = $db->query("SELECT username FROM users WHERE email = '$email'");
                                $username = $username_query->fetch();
                                $_SESSION["username"] = $username[0];

                            } else {
                                throw new Exception('Identifiant - Mot de passe incorrect');
                            }
                        } 
                    } else {
                        throw new Exception('Invalide identifiant - mot de passe');
                    }
                } else{
                    throw new Exception('Quleque chose d\'imprévu s\'est passé');
                }
                unset($stmt);
            }
        } 
    }

    public function logout(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION = array();
        session_destroy();
    }
}