<?php
class livre {
    public $lcode;
    public $titre;
    public $auteur;
    public $date;
    function __construct()
    {}
    
    function insert()
    { 
        require_once('connexion.php'); 
        $cnx=new connexion(); 
        $pdo=$cnx->Cnx(); 
        $req="insert into livre values ('$this->code','$this->titre', '$this->auteur', '$this->date')"; 
        $pdo->exec($req); 
    } 
  
    
}







?>