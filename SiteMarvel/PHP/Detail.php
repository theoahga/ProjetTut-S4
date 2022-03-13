<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Detail.css">
    <title>Detail</title>
</head>
<body>
    <?php include('Menu.php'); ?>
    <div id="details">
        <div id="coverImage">

        </div>
        <div class="buttons">
            <span><a id="one" href="AjouteFavoris.php?identifiant=<?php echo $_GET['id'] ?>"></a></span>
            <span><a id="two" href="RetirerFavoris.php?identifiant=<?php echo $_GET['id'] ?>"></a></span>
        </div>
        <div id="posterImage">

        </div>
        <div id="titreAnime">
            
        </div>
        <div id="synopsis">

        </div>
        <div id="information">
           <div class="titreInfo">
                <p>Information</p>
            </div>
            <ul id="listeInfo">
                
            </ul>
        </div>
        <input type=hidden id="id" value=" <?php echo $_GET['id'] ?>"/> 
    </div>
    <script src='../JS/Detail.js'></script>
</body>
</html>