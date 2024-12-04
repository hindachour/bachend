<?php
require_once('Voiture.php'); 

$voiture = new Voiture();

$carburant = $_POST['carburant'];

$res = $voiture->recherche($carburant);

echo "<h2>Résultats pour le carburant : " . ($carburant) . "</h2>";

if ($res->rowCount() > 0) {
    echo "<table border='1'>
            <thead>
                <tr>
                    <th>ID Voiture</th>
                    <th>Numéro de Série</th>
                    <th>Marque</th>
                    <th>Carburant</th>
                    <th>Prix de Location</th>
                </tr>
            </thead>
            <tbody>";

    
    while ($row = $res->fetch()) {
        echo "<tr>
                <td>{$row[0]}</td> 
                <td>{$row[1]}</td> 
                <td>{$row[2]}</td> 
                <td>{$row[3]}</td> 
                <td>{$row[4]}</td> 
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>Aucune voiture trouvée pour le carburant sélectionné.</p>";
}
?>

