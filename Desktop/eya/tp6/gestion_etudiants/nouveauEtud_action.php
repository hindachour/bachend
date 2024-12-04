<?php
    require_once('etudiant.php');
    $e=new etudiant();
    $e->ecode=$_POST['code'];
    $e->ename=$_POST['nom'];
    $e->esirname=$_POST['prenom'];
    $e->eadr=$_POST['adresse'];
    $e->eclass=$_POST['classe'];
        $e->insert();
    header('Location:IndexEtud.php');
?>