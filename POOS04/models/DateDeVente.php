<?php
require_once('Vente.php');

class DateDeVente{
    private DateTime $annee; 
    private DateTime $mois; 
    private DateTime $jour; 
    //Pourquoi il souligne le rouge s'in y'a tableau d'element ?
    //private Vente $vente=[];
    public function __construct()
    {
        
    }
     //Getters permet d'obtenir la valeur d'un attribut private ou protected
     public function getannee():DateTime{
        return $this->annee;
       
    }
    public function getmois(): DateTime{
        return $this->mois;
    }
    public function getjour():DateTime{
        return $this->jour;
    }

    //Setters
    public function setannee($annee):void{
        $this->annee=$annee;
    }
    public function setmois($mois):void{
        $this->mois=$mois;
    }
    public function setjour($jour):void{
        $this->jour=$jour;
    }
    
   






}