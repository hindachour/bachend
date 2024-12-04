<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $a=rand(1,20);
    while($a%2!=0) {
        $a=rand(1,20);
    }
    $b=rand(1,20);
    while($b%2==0) {
        $b=rand(1,20);
    }
    $c=rand(1,20);
    while($c%2==0) {
        $c=rand(1,20);
    }
    echo $a."|". $b."|". $c;
?>
    
</body>
</html>