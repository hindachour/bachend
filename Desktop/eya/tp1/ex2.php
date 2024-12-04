<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $m=9;
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
    
</body>
</html>