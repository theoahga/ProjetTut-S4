<?php 

session_start();
require_once 'Database.php'; 
$email = htmlspecialchars($_SESSION['mail']);
$identifiant = htmlspecialchars($_GET['identifiant']);

$query = $bdd->prepare('SELECT * FROM favorisMangas WHERE mail = :vmail AND identifiant = :videntifiant');
$query->execute(array('vmail' => $email, 'videntifiant' => $identifiant));
$data = $query->fetch();
$row = $query->rowCount();

if($row == 0){ 
    $insert = $bdd->prepare('INSERT INTO favorisMangas(mail, identifiant) VALUES(:email, :identifiant)');
    $insert->execute(array(
        'email' => $email,
        'identifiant' => $identifiant,
    ));
}
header('Location: MangasFavoris.php'); 
die();

?>