<?php
    require_once('livre.php');
    $l=new livre();
    $l->code=$_POST['code'];
    $l->titre=$_POST['titre'];
    $l->auteur=$_POST['auteur'];
    $l->date=$_POST['date'];
        $l->insert();
 
?>