<?php
$c=$_POST['cin'];
$n=$_POST['nom'];
$p=$_POST['prenom'];
$cx=mysqli_connect("localhost","root","");
mysqli_select_db($cx,"dsi22");
$req="delete from  etudiant where cin='$c'";
$res=mysqli_query($cx,$req);


?>