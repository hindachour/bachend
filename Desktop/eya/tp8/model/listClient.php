<?php
include_once("Client.php");

$cl = new Client();
$clients = $cl->liste()->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Clients</title>
</head>
<body>
    <h1>Liste des Clients</h1>
    <form action="supprime.php" method="post">
        <table border="1">
            <th>
                <tr>
                    <th>Sélectionner</th>
                    <th>ID</th>
                    <th>NCIN</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                </tr>
            </th>
        
                <?php foreach ($clients as $client): ?>
                    <tr>
                        <td><input type="radio" name="idClient" value="<?php echo($client['idClient']); ?>"></td>
                        <td><?php echo($client['idClient']); ?></td>
                        <td><?php echo ($client['ncin']); ?></td>
                        <td><?php echo ($client['nom']); ?></td>
                        <td><?php echo ($client['prenom']); ?></td>
                        <td><?php echo ($client['telephone']); ?></td>
                    </tr>
                <?php endforeach; ?>
    
        </table>

        <input type="submit" value="Supprimer">
    </form>


</body>
</html>