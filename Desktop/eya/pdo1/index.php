<?php 
require_once('user.php'); 
$us=new user(); 
$res=$us->listusers(); 
echo "<table border=1> 
<tr><td>Numero utilisateur</td> 
<td>Nom utilisateur</td> 
<td>Modifier</td> 
<td>Supprimer</td></tr>"; 
foreach($res as $row) 
{ 
echo "<tr><td>$row[id]</td> 
<td>$row[nom]</td> 
<td><a href ='modif.php?id=$row[id]'>Modifier</a></td> 
<td><a href='sup.php?id=$row[id]'>Supprimer</a></td> </tr>"; 
} 
echo "</table>"; 
echo "<a href='inscription.html'>Inscription</a>"; 
?> 