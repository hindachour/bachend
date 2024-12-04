<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      
      function carree($x){
        $x=$x*$x;
        return $x;
    }

    function carre( &$x){
        $x=$x*$x;
    }
    $a=5;
    carree($a);
    echo $a;
    carre($a);
    echo "/".$a;
    


?>
    
</body>
</html>