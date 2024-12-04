<?php 
require_once('etudiant.php');
$e=new etudiant(); 
$res=$e->liste(); 
echo "<table border=1> 
<tr><td>Code</td> 
<td>Nom</td> 
<td>Prenom</td> 
<td>Adresse</td>
<td>Classe</td></tr>"; 
foreach($res as $row) 
{ 
echo "<tr><td>$row[codeEtudiant]</td> 
<td>$row[nom]</td>
<td>$row[prenom]</td>
<td>$row[adresse]</td>
<td>$row[classe]</td></tr>";
} 
echo "</table>"; 
?> 