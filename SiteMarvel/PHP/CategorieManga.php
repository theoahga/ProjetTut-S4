<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Recherche.css">
    <title>Categories Manga</title>
</head>
<body>
    <?php include('Menu.php'); ?>
    <div id="recherche">
        <div class="PrincipalTextDiv">
            <p class="PrincipalText">Categories</p>
        </div>


        <div class="textCarousel">
                <p>Aventure</p>
        </div>
        <div class="carousel">
            
            <div id="carouselbox">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight()">></a>
        </div>


        <div class="textCarousel">
                <p>Super-Power</p>
        </div>
        <div class="carousel">
            <div id="carouselbox1">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft1()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight1()">></a>
        </div>


        <div class="textCarousel">
                <p>Drama</p>
        </div>
        <div class="carousel">
            <div id="carouselbox2">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft2()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight2()">></a>
        </div>


        <div class="textCarousel">
                <p>Amitié</p>
        </div>
        <div class="carousel">
            <div id="carouselbox3">
                
            </div>
            <a class="switchLeft sliderButton" onclick="sliderScrollLeft3()"><</a>
            <a class="switchRight sliderButton" onclick="sliderScrollRight3()">></a>
        </div>

        
    </div>
    <script src="../js/Categories/Manga/CatAdventure.js"></script>
    <script src="../js/Categories/Manga/CatSuperPower.js"></script>
    <script src="../js/Categories/Manga/CatDrama.js"></script>
    <script src="../js/Categories/Manga/CatFriend.js"></script>
</body>
</html>