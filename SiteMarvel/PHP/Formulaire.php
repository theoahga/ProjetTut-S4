<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Formulaire.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Connexion</title>
</head>
<body>
<?php
    if(isset($_GET['signup'])){
        echo '<div class="form_container">';
    }
    else{
        echo '<div class="form_container active">';
    }
?>

    <div class="sign_in">
        <form action="Connexion.php" method="post">
            <h2 class="form_title">Connexion</h2>
            <div class="form_group">
                <input type="email" name="email" class="form_control" placeholder="Email...">
            </div>
            <div class="form_group">
                <input type="password" name="password" class="form_control" placeholder="Mot de passe...">
            </div>
            <div class="form_group">
                <button type="submit" class="submit_btn">Connexion</button>
            </div>
        </form>
        <?php
            if(isset($_GET['error']))
            {
                $err = htmlspecialchars($_GET['error']);
                switch($err)
                {
                    case 'login':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> compte inexistant
                    </div>
                    <?php
                    break;

                    case 'loginEmpty':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> Remplissez les champs
                    </div>
                    <?php
                    break;
                }
            }
            ?>
    </div>

    <div class="sign_up">
        <form action="Inscription.php" method="post">
            <h2 class="form_title">Inscription</h2>
            <div class="form_group">
                <input type="email" name="email" class="form_control" placeholder="Email...">
            </div>
            <div class="form_group">
                <input type="password" name="password" class="form_control" placeholder="Mot de passe...">
            </div>
            <div class="form_group">
                <input type="password" name="repassword" class="form_control" placeholder="Mot de passe...">
            </div>
            <div class="form_group">
                <button type="submit" class="submit_btn">Inscription</button>
            </div>
            <?php
            if(isset($_GET['error']))
            {
                $err = htmlspecialchars($_GET['error']);
                switch($err)
                {
                    case 'password':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mots de passe différents
                    </div>
                    <?php
                    break;

                    case 'email':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> trop long
                    </div>
                    <?php
                    break;

                    case 'exist':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> compte déjà existant
                        </div>
                    <?php
                    break;

                    case 'signEmpty':
                    ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> Remplissez les champs
                        </div>
                    <?php
                    break;
                }
            }
            ?>
        </form>
    </div>

    <div class="overlay_container">
        <div class="overlay">
            <div class="left">
                <h3>Bon retour !</h3>
                <p>Si vous avez déjà un compte, veuillez simplement cliquer ci-dessous afin de vous connecter</p>
                <button class="open_sign_in">Connexion</button>
            </div>

            <div class="right">
                <h3>Bienvenue !</h3>
                <p>Si vous n'avez pas de compte, veuillez simplement cliquer ci-dessous afin de vous inscrire</p>
                <button class="open_sign_up">Inscription</button>
            </div>
        </div>
    </div>
</div>
<script src="../js/Formulaire.js"></script>
</body>
</html>