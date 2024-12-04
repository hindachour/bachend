<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom="eya";
    $adr="alleleya93@gmail.com";
    for ($i=0; $i <strlen($nom) ; $i++) { 
        echo $nom[$i]."<br>";
    }
    $i=0;
    $trouve=false;

    while (($i<strlen($adr)) && ($trouve==false)){
        if($adr[$i]=='@'){
            $trouve=true;
        }
        $i++;
    }
    if ($trouve){
        echo "adresse email valide";
    }
    else{
        echo "adresse email non valide";
    }

    ?>
    
</body>
</html>