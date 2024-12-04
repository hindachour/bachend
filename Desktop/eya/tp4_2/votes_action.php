<?php
$num = $_POST['num'];
$candidat_num =$_POST['candidat'];
$inscrit = false;
$deja_vote = false;

$f1 = fopen("eleves.txt", "r");
while (($ligne = fgets($f1)) !== false) {
    $eleve = explode("#", ($ligne));
    if ($eleve[0] == $num) {
        $inscrit = true; 
        break;
    }
}
fclose($f1);

$f2 = fopen("votes.txt", "r");
while (($ligne = fgets($f2)) !== false) {
    $vote = explode("#", ($ligne)); 
    if ($vote[1] == $num) {
        $deja_vote = true; 
        break;
    }
}
fclose($f2);

if ($inscrit==false) {
    echo "Vous n’êtes pas inscrit.";
} elseif ($deja_vote==true) {
    echo "Vous avez déjà voté.";
}
 else {
    $f2 = fopen("votes.txt", "a");
    $l = "$candidat_num#$num\n"; 
    fwrite($f2, $l); 
    fclose($f2); 
    echo "Vous avez voté pour le candidat numéro $candidat_num."; 
}
?>



