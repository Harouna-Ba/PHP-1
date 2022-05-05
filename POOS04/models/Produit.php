<?php
require_once('Vente.php');
require_once('GestionStock.php');
class Produit{
    private string $nomP;
    private int $quantiteV;
    private int $prixV;
    //classe de navigation
    private Vente $vente;
    private GestionStock $stock;

    public function __construct()
    {
        
    }
    //Getters permet d'obtenir la valeur d'un attribut private ou protected
    public function getnomP():string{
        return $this->nomP;
       
    }
    public function getquantiteV(): int{
        return $this->quantiteV;
    }
    public function getprixV():int{
        return $this->prixV;
    }

    //Setters
    public function setquantiteV($quantiteV):void{
        $this->quantiteV=$quantiteV;
    }
    public function setnomP($nomP):void{
        $this->nomP=$nomP;
    }
    public function setprixV($prixV):void{
        $this->prix=$prixV;
    }
    
   

}






