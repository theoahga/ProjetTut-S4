<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Accueil.css">
    <title>Accueil</title>
</head>
<body>
    <?php include('Menu.php'); ?>
    <div id="txt">
        <h1>Bienvenu sur MonSiteAnime</h1>
        <p>Retrouvez toutes les informations sur vos animes et mangas favoris gratuitement</p>
    </div>
    <div id="accueil">
        <img src="../image/anime.jpg" alt="">
        <footer class="footer">
            <div class="container">
                <div class="ligne">
                    <div class="colonne">
                        <h4>MonSiteAnime</h4>
                        <ul>
                            <li><a href="#">A propos de nous</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            <li><a href="#">Mentions légales</a></li>
                        </ul>
                    </div>
                    <div class="colonne">
                        <h4>Partenaires</h4>
                        <ul>
                            <li><a href="#">ADN</a></li>
                            <li><a href="#">Wakanim</a></li>
                            <li><a href="#">crunchyroll</a></li>
                            <li><a href="#">Kitsu</a></li>
                        </ul>
                    </div>
                    <div class="colonne">
                        <h4>Nous contacter</h4>
                        <ul>
                            <li><a href="#">MonSiteAnime@gmail.com</a></li>
                            <li><a href="#">instagram</a></li>
                            <li><a href="#">twitter</a></li>
                            <li><a href="#">facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>