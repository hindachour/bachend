<?php 
class connexion 
{  
public function Cnx() 
  { 
    $dbc=new PDO('mysql:host=localhost;dbname=biblio','root','');  
    return $dbc; 
  }    
}?> 