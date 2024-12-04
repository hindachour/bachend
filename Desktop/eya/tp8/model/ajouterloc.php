<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="ajouterLoc_action.php" method="post">
        <fieldset>
            <legend><h3>Nouvelle Location :</h3></legend>
            <label for="client">Client :</label>
            <select name="cl">
                <option>-Selectionnez un client-</option>
                <?php
                    require_once('client.php');
                    $c=new client();
                    $res=$c->liste();
                    foreach($res as $row)
                    {
                       echo"<option value=".$row['idClient'] .">".$row['prenom']." ".$row['nom']."</option>";
                    } 
                ?>
            </select>
            <br>
            <label for="voiture">Voiture :</label>
            <select name="voi">
                <option>-Selectionnez la voiture-</option>
                <?php
                    require_once('voiture.php');
                    $v=new voiture();
                    $res=$v->liste();
                    foreach($res as $row)
                    {
                       echo"<option value=".$row['idVoiture'] .">".$row['marque']." (".$row['numSerie'].")</option>";
                    } 
                ?>
            </select>
            <br>
            <label for="date">Date :</label>
            <input type="date" name="date">
            <br>
            <label for="nbr">Nombre de jour :</label>
            <input type="number" name="nbrj">
            <br>
            <button type="submit">Valider</button>
        </fieldset>
    </form>
</body>
</html>