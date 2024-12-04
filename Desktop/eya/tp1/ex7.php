<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $t=array("nom"=>"eya","prenom"=>"allel","age"=>"20");
    echo "<table border='1'>";
    foreach ($t as $val){
        echo "<tr><td>" . $val . "</td></tr>";
    }
    echo "</table>";
    echo "<table border='1'>";
    foreach ($t as $cle =>$val){
        echo "<tr><td>". $cle."</td><td>".$val."</td></tr>";
    }
    echo "</table>";


   

?>
    
</body>
</html>