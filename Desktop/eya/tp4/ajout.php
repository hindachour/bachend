<?php
$cin=$_POST['cin'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$fichier=fopen('etudiant.txt','a');
fwrite($fichier,$cin."|".$nom."|".$prenom."\n");
fclose($fichier);





?>