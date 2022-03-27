<?php

session_start();
require_once 'Database.php'; 
$sth = $bdd->prepare("SELECT identifiant FROM favorisMangas WHERE mail = :vmail");
$sth->execute(array('vmail' => $_SESSION['mail']));
$result = $sth->fetchAll();
$tab = array();
foreach ($result as $row) {
    array_push($tab, intval($row["identifiant"]));
}


?>

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
    <title>Favoris Mangas</title>
</head>
<body>
    <?php include('Menu.php'); ?>
    <div id="recherche">
        <div class="PrincipalTextDiv">
            <p class="PrincipalText">Manga favoris</p>
        </div>
        <div id="result">

        </div>
        <div id="switchpage">
            
        </div>
        <input type=hidden id="offset" value=" <?php echo $num ?>"/>
        <input type=hidden id="tab" value="<?php echo json_encode($tab); ?>"/>
    </div>
    <script src="../js/RechercheManga.js"></script>
</body>
</html>