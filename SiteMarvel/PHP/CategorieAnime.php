<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Recherche.css">
    <title>Categories Anime</title>
</head>
<body>
    <?php include('Menu.php'); ?>
    <div id="recherche">
        <div class="PrincipalTextDiv">
            <p class="PrincipalText">Categories</p>
        </div>
        <div class="carousel">
            <div class="textCarousel">
                <p>Aventure</p>
            </div>
            <div id="carouselbox">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight()">></a>
        </div>
        <div class="carousel">
            <div class="textCarousel">
                <p>Super-Power</p>
            </div>
            <div id="carouselbox1">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft1()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight1()">></a>
        </div>
        <div class="carousel">
            <div class="textCarousel">
                <p>Drama</p>
            </div>
            <div id="carouselbox2">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft2()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight2()">></a>
        </div>
        <div class="carousel">
            <div class="textCarousel">
                <p>Amitié</p>
            </div>
            <div id="carouselbox3">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft3()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight3()">></a>
        </div>
    </div>
    <script src="../js/Categories/Anime/CatAdventure.js"></script>
    <script src="../js/Categories/Anime/CatSuperPower.js"></script>
    <script src="../js/Categories/Anime/CatDrama.js"></script>
    <script src="../js/Categories/Anime/CatFriend.js"></script>
</body>
</html>