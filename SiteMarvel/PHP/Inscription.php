<?php 

require_once 'Database.php'; 

if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $repassword = htmlspecialchars($_POST['repassword']);

    $query = $bdd->prepare('SELECT mail, password FROM utilisateurs WHERE mail = ?');
    $query->execute(array($email));
    $data = $query->fetch();
    $row = $query->rowCount();

    if($row == 0){ 
        if(strlen($email) <= 200){
            if($password === $repassword){
                //hash
                $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

                $insert = $bdd->prepare('INSERT INTO utilisateurs(mail, password) VALUES(:email, :password)');
                $insert->execute(array(
                    'email' => $email,
                    'password' => $password,
                ));
                header('Location:Formulaire.php?error=inscrit');
                die();
            }
            else{
                header('Location: Formulaire.php?error=password&signup=1'); 
                die();
            }
        }
        else{ 
            header('Location: Formulaire.php?error=email&signup=1'); 
            die();
        }
    }
    else{ 
        header('Location: Formulaire.php?error=exist&signup=1'); 
        die();
    }
}
else{ 
    header('Location: Formulaire.php?error=signEmpty&signup=1'); 
    die();
}


?>