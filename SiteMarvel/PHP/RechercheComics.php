<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/Style.css">
        <title>Menu</title>
    </head>
    <body>
        <div class="menu">
                <?php include("menu.php");?>
        </div>
        <div class="content">
            <div id="PageTitle">
                <p>Rechercher un Comics</p>
            </div>
            <input id="searchbar" type="text" name="search" placeholder="Recherche Comics">
            <div id="container"></div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
        <script src="../js/ApiComics.js"></script>  
    </body>
</html>