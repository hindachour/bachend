<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un Étudiant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        form {
            width: 320px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        legend {
            color: #0056b3;
            font-size: 1.2em;
        }
        p {
            margin-bottom: 15px;
            font-size: 0.8em;
            font-weight:bold;
            
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        select, input[type="text"] {
            width: 90%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        button {
            padding: 10px;
            width: 35%;
            margin: 5px 1%;
            font-size: 1em;
            color: white;
            background-color: #0056b3;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="reset"] {
            background-color: #c00;
        }
    </style>
</head>
<body>
    <form action="rechercheEtud_action.php" method="post">
        <fieldset>
            <legend>Rechercher un Étudiant</legend>
            <p>Veuillez sélectionner un critère de recherche :</p>
            <label for="critere">Critère :</label>
            <select name="s" id="critere">
                <option value="codeEtudiant">Code Étudiant</option>
                <option value="nom">Nom</option>
                <option value="prenom">Prénom</option>
                <option value="adresse">Adresse</option>
                <option value="classe">Classe</option>
            </select>
            
            <label for="valeur">Valeur :</label>
            <input type="text" id="valeur" name="valeur" placeholder="Entrez la valeur">
            
            <button type="reset">Annuler</button>
            <button type="submit">Rechercher</button>
        </fieldset>
    </form>
</body>
</html>
