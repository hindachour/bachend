<?php
require_once('location.php');
$l = new location();
require_once('voiture.php');
$v = new voiture();
require_once('client.php');
$c = new client();

echo "<h2>Liste des locations</h2>";
echo "<table border=1>
<thead>
    <tr>
        <th colspan=3>Location</th>
        <th colspan=2>Voiture</th>
        <th colspan=3>Client</th>
    </tr>
    <tr>
        <th>Identifiant</th>
        <th>Nbr de jours</th>
        <th>Date</th>
        <th>Marque</th>
        <th>Numéro de série</th>
        <th>Numéro CIN</th>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
</thead>
<tbody>";

$res1 = $l->liste();
foreach ($res1 as $row) {
    
    $res2 = $v->getVoiture($row['idVoiture'])->fetch(); 
    $res3 = $c->getClient($row['idClient'])->fetch(); 

    echo "<tr>";
    echo "<td>{$row[0]}</td>"; 
    echo "<td>{$row[1]}</td>";
    echo "<td>{$row[2]}</td>";
    echo "<td>{$res2[0]}</td>"; 
    echo "<td>{$res2[1]}</td>";
    echo "<td>{$res3[0]}</td>"; 
    echo "<td>{$res3[1]}</td>";
    echo "<td>{$res3[2]}</td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>