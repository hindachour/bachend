<?php
    
    $c=$_POST["c"];
    $n=$_POST["n"];
    $pr=$_POST["pr"];
    $cla=$_POST["cl"];
    $clr=$_POST["clr"];
    $com=$_POST["com"];
    $m="";
    foreach ($clr as $couleur){
        $m=$m." <br> ".$couleur;
    }
    echo"  <table border='1'>
    <tr>
        <td>civilite</td>
        <td>".$c."</td>
    </tr>
    <tr>
        <td>nom</td>
        <td>".$n."</td>
    </tr>
    <tr>
        <td>prenom</td>
        <td>".$pr."</td>
    </tr>
    <tr>
        <td>classe</td>
        <td>".$cla."</td>
    </tr>
    <tr>
        <td>couleurs prefere</td>
        <td>".$m."</td>
    </tr>
    <tr>
        <td>commentaire</td>
        <td>".$com."</td>
    </tr>
</table>";
?>