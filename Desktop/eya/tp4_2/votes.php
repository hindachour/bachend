<!doctype html>
<html> 
<head> 
 <title> Saisie des Votes </title> 
</head> 
<body> 
<h2 align="center">Saisie des Votes </h2> 
<form name="form1" method="post" action="votes_action.php"> 
<table width="100%" border="0" align="center"> 
 <tr> 
   <td> Electeur N°:</td> 
   <td><input name="num" type="text" maxlength="4" required/></td> 
 </tr> 
 <tr> 
   <td colspan="2"><h3 align="center">Les candidats </h3></td> 
 </tr> 
 <tr> 
   <td> <strong>Filles</strong></td> 
   <td> <strong>Garçons</strong></td> 
 </tr> 

<?php
$fichier = fopen("eleves.txt", "r");
$filles = [];
$garcons = [];

while (($ligne = fgets($fichier)) !== false) {
    $eleve = explode("#", $ligne);
    if (($eleve[5]) == "O") {
        if ($eleve[3] == "F") {
            $filles[] = $eleve;
        } else if ($eleve[3] == "G") {
            $garcons[] = $eleve;
        }
    }
}
fclose($fichier);

echo '<tr><td>';
foreach ($filles as $fille) {
    echo '<input type="radio" name="candidat" value="' . $fille[0] . '" required> ' . $fille[1] . ' ' . $fille[2] . '<br>';
}
echo '</td>';
echo '<td>';
foreach ($garcons as $garcon) {
    echo '<input type="radio" name="candidat" value="' . $garcon[0] . '" required> ' . $garcon[1] . ' ' . $garcon[2] . '<br>';
}
echo '</td></tr>';
?> 

 <tr> 
   <td><input type="submit" name="Submit" value="Voter" /></td> 
   <td><input type="reset" name="reset" value="Annuler" /></td> 
 </tr> 
</table> 
</form> 
</body> 
</html>



