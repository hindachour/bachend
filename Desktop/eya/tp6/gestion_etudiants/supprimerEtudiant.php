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
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        legend {
            color: blue;
        }
        input[type="text"] {
            width: 200px;
            padding: 5px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            color: blue;
            background-color: white;
            border: 1px solid blue;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="reset"] {
            margin-right: 10px;
        }
        label{
            font-weight:bold;
        }
    </style>
</head>
<body>
    <form action="supprimerEtud_action.php" method="post">
        <fieldset>
            <legend><h3>Supprimer un Étudiant</h3></legend>
            <p>Veuillez remplir les champs suivants:</p>
            <label for="code">Code:</label>
            <input type="text" id="code" name="code"><br>
            <button type="reset">Annuler</button>
            <button type="submit">Supprimer</button>
        </fieldset>
    </form>
</body>
</html>
