<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fact($n) {
        $f = 1; 
        for ($i=2;$i<= $n;$i++) { 
            $f=$f *$i;
        }
        return $f;
    }
    function cardinal($p,$n){

        $s= fact($n)/(fact($p)*fact($n-$p));
        return $s;
        

    }
    function somme ($t){
        $s=0;
        for($i=0;$i<count($t);$i++){
            $s+=$t[$i];
        }
        return $s;

    }
    function minmax($t) {
        $imin = 0;
        $imax = 0;
        $min = $t[0];
        $max = $t[0];
    
        for($i = 1; $i < count($t); $i++) {
            if($t[$i] < $min) {
                $min = $t[$i];
                $imin = $i;
            }
            if($t[$i] > $max) {
                $max = $t[$i];
                $imax = $i;
            }
        }
        
        $s = array('max' => $imax, 'min' => $imin);
        return $s;
    }
    
    $t = array(5, 7, 9);
    $tt = minmax($t);
    echo 'Le maximum est ' . $tt['max'] ."<br>";
    echo 'Le minimum est ' . $tt['min'];



    ?>
    
  





    
</body>
</html>