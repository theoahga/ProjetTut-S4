<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Recherche.css">
    <title>Recherche Anime</title>
</head>
<body>
    <?php include('Menu.php'); ?>
    <div id="recherche">
        <div class="PrincipalTextDiv">
            <p class="PrincipalText">Rechercher un Anime</p>
        </div>
        <div class="search_bar">
            <input type="text" placeholder="Anime ..." id="search_input"><button id="search_button">Recherche</button>
        </div>
        <div id="result">
            <p id="No-elt">Aucun élement trouvé.</p>
        </div>
    </div>
    <script src="../js/RechercheAnime.js"></script>
</body>
</html>