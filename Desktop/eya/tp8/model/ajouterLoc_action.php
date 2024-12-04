<?php
    require_once('location.php');
    $l= new location();
    $l->insert($_POST['cl'], $_POST['voi'], $_POST['nbrj'], $_POST['date']);
    header('Location:ajouterLoc.php');
?>