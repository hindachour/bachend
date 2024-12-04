<?php 
    include_once("modele.php"); 
    class Voiture extends Modele{ 
        private $idvoiture, $nserir, $marque, $car, $prix; 
        function __construct($id="",$nserie="",$marque="",$car="",$prix="") { 
            $this->idvoiture=$id; 
            $this->nserie=$nserie; 
            $this->marque=$marque; 
            $this->car=$car; 
            $this->prix=$prix;
            parent::__construct(); 
        } 

        function insert($nserie, $marque, $car, $prix){ 
            $query="insert into voiture(numSerie, marque, carburant, prixLocation)values (?, ?, ?, ?)"; 
            $res=$this->pdo->prepare($query);  
            return $res->execute(array($nserie, $marque, $car, $prix));  
        } 

        function delete($idvoiture) { 
            $query = "delete from voiture where idVoiture=?"; 
            $res=$this->pdo->prepare($query);  
            return $res->execute(array($idvoiture));  
        } 

        function liste(){ 
            $query = "select * from voiture"; 
            $res=$this->pdo->prepare($query);  
            $res->execute(); 
            return $res; 
        }

        function recherche($carburant) {
            $query = "SELECT * FROM voiture WHERE carburant = ?";
            $res = $this->pdo->prepare($query);
            $res->execute(array($carburant));
            return $res;
        }

        function getVoiture($id){
            $query = "SELECT * FROM voiture WHERE idVoiture = ?";
            $res = $this->pdo->prepare($query);
            $res->execute(array($id));
            return $res;
        }
    }
?> 
