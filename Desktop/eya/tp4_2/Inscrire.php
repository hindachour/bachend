<?php
$num = $_POST['num'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$g = $_POST['r1'];
$niveau = $_POST['niveau'];
$c = $_POST['r2']; 

if (chercheEleve($num)) {
    echo "Élève déjà inscrit.";
} else {
    $f = fopen("eleves.txt", "a+");
    fwrite($f, "$num#$nom#$prenom#$g#$niveau#$c#\n");
    fclose($f);
    echo '<script>alert("Inscription effectuée avec succès");</script>';
}

function chercheEleve($num) {
    $f = fopen("eleves.txt", "r");
    $trouve = false;

    while (($l = fgets($f)) !== false) {
        $t = explode("#", $l);  
        if ($t[0] == $num) {  
            $trouve = true;
            break; 
        }
    }
    fclose($f); 
    return $trouve;  
}
?>

