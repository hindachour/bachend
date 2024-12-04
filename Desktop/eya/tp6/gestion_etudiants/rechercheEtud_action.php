<?php
require_once('etudiant.php');

    $e = new etudiant();
    $e->recherche($_POST['s'], $_POST['valeur']);
    
    //header('Location: IndexEtud.php');

?>
