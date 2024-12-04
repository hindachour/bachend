<?php
include_once("Client.php");


    $ncin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $client = new Client();
    $client->insert($ncin, $nom, $prenom, $telephone);
    //header("Location: ajoutClient.php");
   

?>
