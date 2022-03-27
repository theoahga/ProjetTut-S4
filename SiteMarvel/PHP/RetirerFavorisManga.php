<?php 

session_start();
require_once 'Database.php'; 
$email = htmlspecialchars($_SESSION['mail']);
$identifiant = htmlspecialchars($_GET['identifiant']);

$query = $bdd->prepare('SELECT * FROM favorisMangas WHERE mail = :vmail AND identifiant = :videntifiant');
$query->execute(array('vmail' => $email, 'videntifiant' => $identifiant));
$data = $query->fetch();
$row = $query->rowCount();

if($row == 1){ 
    $insert = $bdd->prepare('DELETE FROM favorisMangas WHERE mail = :vmail AND identifiant = :videntifiant');
    $insert->execute(array(
        'vmail' => $email,
        'videntifiant' => $identifiant,
    ));
}
header('Location: MangasFavoris.php'); 
die();

?>