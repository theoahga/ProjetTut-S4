<?php
    $num = 0;
    if(isset($_GET['num'])){
        $num = $_GET['num'];
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Recherche.css">
    <title>Populaire Anime</title>
</head>
<body>
    <?php include('Menu.php'); ?>
    <div id="recherche">
        <div class="PrincipalTextDiv">
            <p class="PrincipalText">Anime les plus populaires</p>
        </div>
        <div id="result">

        </div>
        <div id="switchpage">
            
        </div>
        <input type=hidden id="offset" value=" <?php echo $num ?>"/>
            
    </div>
    <script src="../js/RechercheAnime.js"></script>
</body>
</html>