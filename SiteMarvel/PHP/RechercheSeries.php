<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RechercheSeries</title>
    <link rel="stylesheet" href="StyleRecherche.css">
</head>
<body>
    <div class="menu">
        <?php include("menu.php");?>
    </div>
    <div class="recherche">
        <input id="searchbar" type="text" name="search" placeholder="Search anime">
        <div id="container"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script src="ApiSeries.js"></script>
</body>
</html>