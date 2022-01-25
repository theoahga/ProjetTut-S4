<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="menucss.css">
        <title>Menu</title>
    </head>
    <body>
        <div class="flex-row">
            <div class="menu">
                <?php include("menu.php");?>
            </div>
            <div class="content">
                <input id="searchbar" type="text" name="search" placeholder="Recherche Comics">
                <div id="container"></div>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="ApiComics.js"></script>  
    </body>
</html>