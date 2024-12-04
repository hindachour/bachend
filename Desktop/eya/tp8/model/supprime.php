<?php
include_once("client.php");
$cl = new Client();
$idClient = $_POST['idClient'];
echo"$idClient";
$cl->delete($idClient);
header("Location: listClient.php");
?>

