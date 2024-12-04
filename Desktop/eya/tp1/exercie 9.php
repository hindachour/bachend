<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10000;
    $b=$a/3600;
    $r=(floor($b));
    if ($b<=9){
        $r="0".(floor($b));

    }
    $c=$a%3600;
    $t=$c/60;
    $y=(floor($b));
    if ($b<=9){
            $y="0".(floor($b));
    
        }


    $f=$c%60;
    $z=(floor($f));
    if($f<=9){
        $z="0".(floor($f));}
    echo $r.":".$y.":".$z;



?>
    
</body>
</html>