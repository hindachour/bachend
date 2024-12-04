<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
        <table border="1">
            <tr>
                <td>civilite</td>
                <td>m<input type="radio" name="c" value="m">  mme <input type="radio" name="c" value="mme"></td>
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
                <?php include "class.php";
                for($i=0;$i<count($t);$i++){
                    echo "<option value=".$t[$i].">".$t[$i]."</option>";
                }
                ?>
                </td>
            </tr>
            <tr>
                <td>couleurs prefere</td>
                <td><input type="checkbox" name="clr[]" value="blue">blue <br>
                    <input type="checkbox" name="clr[]" value="blanc">blanc <br>
                    <input type="checkbox" name="clr[]" value="rouge">rouge <br>
                    <input type="checkbox" name="clr[]" value="vert">vert <br></td>
            </tr>
            <tr>
                <td>commentaire</td>
                <td><textarea name="com" id="com" cols="30" rows="10"></textarea></td>
            </tr>
            <tr><td rowspan="2"><input type="submit" value="ok"><input type="reset" value="annuler"></td></tr>
        </table>
    </form>
    
</body>
</html>