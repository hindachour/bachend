<?php
$c=$_POST['cin'];
$n=$_POST['nom'];
$p=$_POST['prenom'];
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"dsi22");
$req="insert into etudiant values ('$c','$n','$p')";
$res=mysqli_query($cx,$req);

?>