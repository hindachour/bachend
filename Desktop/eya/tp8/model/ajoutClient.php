<!-- ajoutClient.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement Nouveau Client</title>
</head>
<body>
    <form action="ajoutClient_action.php" method="POST">
        <fieldset>
            <legend>Nouveau Client</legend>
            <label for="cin">Numéro de Cin : </label>
            <input type="text" name="cin" id="cin" required><br>

            <label for="nom">Nom : </label>
            <input type="text" name="nom" id="nom" required><br>

            <label for="prenom">Prénom : </label>
            <input type="text" name="prenom" id="prenom" required><br>

            <label for="telephone">Téléphone : </label>
            <input type="text" name="telephone" id="telephone" required><br>

            <input type="submit" value="Enregistrer">
            <input type="reset" value="Annuler">
        </fieldset>
    </form>
</body>
</html>

