<?php
$m=$_POST['n'];
switch ($m) {
    case 12:
    case 1:
    case 2:
        echo "hiver";
        break;
    case 3:
    case 4:
    case 5:
        echo "automne";
            break;
    case 6:
    case 7:
    case 8:
        echo "printemps";
             break;
    case 9:
    case 10:
    case 11:
        echo "étè";
        break;
       
    
    
    default:
        echo "verifier le mois";
        break;
}



?>