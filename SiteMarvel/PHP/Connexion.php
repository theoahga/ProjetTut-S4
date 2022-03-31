<?php

session_start();
require_once 'Database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])){
    $email = htmlspecialchars($_POST['email']); 
    $password = htmlspecialchars($_POST['password']);

    $query = $bdd->prepare('SELECT mail, password FROM utilisateurs WHERE mail = ?');
    $query->execute(array($email));
    $data = $query->fetch();
    $row = $query->rowCount();
        
    echo $row;
    if($row > 0){
        if(password_verify($password, $data['password'])){
            $_SESSION['mail'] = $data['mail'];
            header('Location: Accueil.php');
            die();
        }
        else{
            header('Location: Formulaire.php?error=login'); 
            die();
        }
    }
    else{ 
        header('Location: Formulaire.php?error=login'); 
        die();
    } 
}
else{   
    header('Location: Formulaire.php?error=loginEmpty'); 
    die();
}

?>