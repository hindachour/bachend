<?php 
    include_once("modele.php"); 
    class Location extends Modele{ 
        private $idl, $idc, $idv, $nbrJour, $date; 
        function __construct($idl="",$idc="",$idv="",$nbrJour="",$date="") { 
            $this->idl=$idl; 
            $this->idc=$idc; 
            $this->idv=$idv; 
            $this->nbrJour=$nbrJour; 
            $this->date=$date;
            parent::__construct(); 
        } 

        function insert($idc, $idv, $nbj, $date){ 
            $query="insert into location(idClient, idVoiture, nbrJour, dateLoc)values (?, ?, ?, ?)"; 
            $res=$this->pdo->prepare($query);  
            return $res->execute(array($idc, $idv, $nbj, $date));  
        } 

        function delete($idl) { 
            $query = "delete from location where idLocation=?"; 
            $res=$this->pdo->prepare($query);  
            return $res->execute(array($idl));  
        } 

        function liste(){ 
            $query = "select * from location"; 
            $res=$this->pdo->prepare($query);  
            $res->execute(); 
            return $res; 
        }
    }
?> 