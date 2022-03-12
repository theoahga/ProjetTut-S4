<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/Menu.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <title>Menu</title>
    </head>
    <body>
        <div class="navbar">
            <div class="titre">
                <a href="#" id="titre">MonSiteAnime</a>
            </div>
            <a href="#" class="lien">
                <i class='bx bx-home icon' ></i>
                <p class="page">Accueil</p>
            </a>
            <div href="#" class="lien conteneur">
                <i class='bx bx-tv icon' ></i>
                <p class="page">Anime</p>

                <ion-icon name="chevron-down-outline" class="conteneur_icon"></ion-icon>

                <ul class="conteneur_menu">
                    <a href="RechercheAnime.php" class="sous_lien">Recherche</a>
                    <a href="CategorieAnime.php" class="sous_lien">Catégorie</a>
                    <a href="PopulaireAnime.php" class="sous_lien">Top</a>
                </ul>
            </div>
            <div href="#" class="lien conteneur">
                <i class='bx bx-book-open icon' ></i>
                <p class="page">Manga</p>

                <ion-icon name="chevron-down-outline" class="conteneur_icon"></ion-icon>

                <ul class="conteneur_menu">
                    <a href="RechercheManga.php" class="sous_lien">Recherche</a>
                    <a href="CategorieManga.php" class="sous_lien">Catégorie</a>
                    <a href="PopulaireManga.php" class="sous_lien">Top</a>
                </ul>
            </div>
            <div href="#" class="lien conteneur">
                <i class='bx bx-bookmark-alt-plus icon'></i>
                <p class="page">Collection</p>

                <ion-icon name="chevron-down-outline" class="conteneur_icon"></ion-icon>

                <ul class="conteneur_menu">
                    <a href="#" class="sous_lien">Anime</a>
                    <a href="#" class="sous_lien">Manga</a>
                </ul>
            </div>
            <a href="#" class="lien">
                <i class='bx bx-log-out icon'></i>
                <p class="page">Déconnexion</p>
            </a>
        </div>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        <script src="../js/Menu.js"></script>
    </body>
</html>
