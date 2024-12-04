<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
   $nom = array();
   $t = array("php5@free.com", "jean5@fiscali.fr", "abc@waladoo.fr", "saleh@waladoo.fr", "Paul@fiscali.fr", "darine@fiscali.fr");
   for ($i = 0; $i < count($t); $i++) {
       $a = substr($t[$i], 0, strpos($t[$i], '@')); 
       $nom[$i] = substr($t[$i], strlen($a) + 1); 
   }
   _
   foreach ($occ as $cle => $val) {
    $nb=($val/count($nom))*100;
       echo "fournisseur d'accès :". $cle ."=".$nb." % <br>";
   }
    ?>
    
</body>
</html>