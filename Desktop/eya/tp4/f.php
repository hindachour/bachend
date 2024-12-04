<?php
    
    $c=$_POST["c"];
    $n=$_POST["n"];
    $pr=$_POST["pr"];
    $cla=$_POST["cl"];
    echo"  <table border='1'>
    <tr>
        <td>cin</td>
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
</table>";
?>