<?php
require_once('Produit.php');
class GestionStock{
    private int $stockInit;
    private int $stockRestant;

    //private Produit $produit=[];


    public function __construct()
    {
        
    }
     //Getters 
     public function getstockInit():int{
        return $this->stockInit;
       
    }
    public function getstockRestant(): int{
        return $this->stockRestant;
    }


    //Setters
    public function setstockInit($stockInit):void{
        $this->stockInit=$stockInit;
    }
    public function setstockRestant($stockRestant):void{
        $this->stockRestant=$stockRestant;
    }
   
    
   





}