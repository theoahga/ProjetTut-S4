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
        <div class="carousel">
            <div id="carouselbox">

            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight()">></a>
        </div>
        <div class="search_bar">
            <input type="text" placeholder="Anime ..." id="search_input"><button id="search_button">Recherche</button>
        </div>
        <div id="result">

        </div>
    </div>
    <script src="../js/Categories.js"></script>
    <script src="../js/RechercheAnime.js"></script>
</body>
</html>