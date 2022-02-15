<?php

    try {
        $bdd = new PDO("mysql:host=mysql-gr1gny.alwaysdata.net;dbname=gr1gny_ptuts4;charset=utf8",
                        "gr1gny",
                        "AZJ2SOK4CSaz5d");
    }
    catch(PDOException $e){
        die('Erreur : '.$e->getMessage());
    }

?>