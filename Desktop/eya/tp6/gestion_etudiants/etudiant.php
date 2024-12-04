<?php
class etudiant
{
    public $ecode;
    public $ename;
    public $esirname;
    public $eadr;
    public $eclass;

    function __construct()
    {}

    function insert()
    { 
        require_once('connexion.php'); 
        $cnx=new connexion(); 
        $pdo=$cnx->Cnx(); 
        $req="insert into etudiant values ('$this->ecode','$this->ename', '$this->esirname', '$this->eadr', '$this->eclass')"; 
        $pdo->exec($req); 
    } 

    function supprimer($code) 
    { 
        require_once('connexion.php'); 
        $cnx=new connexion(); 
        $pdo=$cnx->Cnx(); 
        $req="DELETE FROM etudiant WHERE CodeEtudiant=$code";  
        $pdo->exec($req); 
    }

    function modifier($code, $nom, $prenom, $adr, $classe) 
    { 
        require_once('connexion.php'); 
        $cnx=new connexion(); 
        $pdo=$cnx->Cnx(); 
        require_once('connexion.php'); 
        $req="UPDATE etudiant SET Nom='$nom', Prenom='$prenom', Adresse='$adr', Classe='$classe' WHERE CodeEtudiant=$code "; 
        $pdo->exec($req); 
    }

    function liste() 
    { 
        require_once('connexion.php'); 
        $cnx=new connexion(); 
        $pdo=$cnx->Cnx();           
        $req="SELECT * FROM etudiant"; 
        $res=$pdo->query($req);  
        return $res;  
    }

   function recherche($c, $valeur)
{
    require_once('connexion.php'); 
    $cnx = new connexion(); 
    $pdo = $cnx->Cnx(); 
    $req = "SELECT * FROM etudiant WHERE $c = '$valeur'";
    $res = $pdo->query($req);
    

    if ($res->fetch()) {
        echo "L'étudiant cherché existe dans la base";
    } else {
        echo "L'étudiant cherché n'existe pas";
    }
}

}
?>