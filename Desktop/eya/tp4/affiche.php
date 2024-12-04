<?php
$f=fopen("etudiant.txt",'r');
echo "<table border ='1'>";
while(!feof($f)){
    $l=fgets($f,255);
    if($l){
    $t =explode("|",$l);
    echo "<tr>  <td>" .$t[0]."</td> <td>".$t[1]."</td> <td> ".$t[2]." </td> </tr>";}
}
echo "<table>";



?>