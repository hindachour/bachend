<?php 
require_once('etudiant.php'); 
$code=$_POST['code'];
$e=new etudiant(); 
$e->supprimer($code); 
header('Location:IndexEtud.php');
?> 