<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $t=array();
    $k=array();
    $p=array();
    for ($i=0; $i <26 ; $i++) { 
        $t[$i]=rand(0,20);
        
    }
    echo "voici le contenu de tableau <br>";
    for ($i=0; $i <26 ; $i++) { 
        echo  $t[$i]."|";
        
    }
    echo"<br>";
    
   
    for ($j=0;$j< 21;$j++) {
        $k[$j] = $j;   
        $p[$j] = 0;   
    }
    for ($i = 0; $i < 26; $i++) {
        for ($j = 0; $j < 21; $j++) {
            if ($t[$i] == $k[$j]) {
                $p[$j]++;
            }
        }
    }
    echo"nombre d'occurence de chaque entier entre 0 et 20 <br>";
 
    for ($j = 0; $j < 21; $j++) {
        echo $k[$j] . " | " .$p[$j]."<br>" ;
    }
    
        

        
    
        
    
    
        
    
    



?>
    
</body>
</html>