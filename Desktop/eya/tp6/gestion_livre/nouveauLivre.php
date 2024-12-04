<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Livre</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        legend {
            color: blue;
        }
        form {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fff;
        }
        div {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        label {
            width: 100px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            color: blue;
            border: 1px solid blue;
            background-color: #f1f1f1;
            border-radius: 4px;
            cursor: pointer;
        }
        button[type="reset"] {
            margin-left: 10px;
        }
        button:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <form action="nouveauLivre_action.php" method="post">
        <fieldset>
            <legend><h3>Nouveau Livre</h3></legend>
                <div>
                    <label for="code">Code:</label>
                    <input type="text" id="code" name="code">
                </div>
                <div>
                    <label for="titre">Titre:</label>
                    <input type="text" id="titre" name="titre">
                </div>
                <div>
                    <label for="auteur">Auteur:</label>
                    <input type="text" id="auteur" name="auteur">
                </div>  
                <div>
                    <label for="date">Date Edition:</label>
                    <input type="text" id="date" name="date">
                </div>  
      
            <button type="submit">Enregistrer</button>
            <button type="reset">Annuler</button>
        </fieldset>
    </form>
</body>
</html>
