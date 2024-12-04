<?php
$cx = mysqli_connect("localhost", "root", "");
mysqli_select_db($cx, "dsi22");
$req = "select * from etudiant";
$res = mysqli_query($cx, $req);
echo "<table border='1'>";
while ($row = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td> cin: " . $row[0] . "</td><td> Nom: " . $row[1] . " </td><td> Prénom: " . $row[2] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
