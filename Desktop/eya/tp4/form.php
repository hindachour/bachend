<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="f.php" method="post">
        <table border="1">
            <tr>
                <td>cin</td>
                <td><input type="text" name="c" id="c"></td>
            </tr>
            <tr>
                <td>nom</td>
                <td><input type="text" name="n" id="n"></td>
            </tr>
            <tr>
                <td>prenom</td>
                <td><input type="text" name="pr" id="pr"></td>
            </tr>
            <tr>
                <td>classe</td>
                <td><select name="cl" id="cl">
                <?php
                $f=fopen("class.txt","r");
                while(!feof($f)){
                    $l=fgets($f,255);
                    if($l){
                    echo "<option value=".$l.">".$l."</option>";}

                    
                }
                ?>
                </select>
                </td>
            </tr>
            
            <tr>
                <td><input type="submit" value="ok"></td>
                <td><input type="reset" value="annuler"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>