<!doctype html>
<html>
<head>
    <title>Résultats des Votes</title>
</head>
<body>
<h2 align="center">Résultats des Votes</h2>
<table border="1" align="center">
    <tr>
        <th>Numéro</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Genre</th>
        <th>Nombre de Votes</th>
    </tr>

    <?php
    function nbrVote($candidat_num) {
       
        $compteur = 0;

        $f = fopen("votes.txt", "r");
        while (($l= fgets($f)) !== false) {
            $vote = explode("#", $l);
            if ($vote[0] == $candidat_num) {
                $compteur++;
            }
        }
        fclose($f);
        return $compteur;
    }
    
   
    $f = fopen("eleves.txt", "r");

    while (($l = fgets($f)) !== false) {
        $eleve = explode("#", $l);
        if ( ($eleve[5]) == "O") {
            $num_candidat = ($eleve[0]);
            $nom_candidat = ($eleve[1]);
            $prenom_candidat =($eleve[2]);
            $genre_candidat = ($eleve[3]);

            $nombre_votes = nbrVote($num_candidat);

            echo "<tr>
                    <td>$num_candidat</td>
                    <td>$nom_candidat</td>
                    <td>$prenom_candidat</td>
                    <td>$genre_candidat</td>
                    <td>$nombre_votes</td>
                  </tr>";
        }
    }
    fclose($f);
    ?>
</table>
</body>
</html>
