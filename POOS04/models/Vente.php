<?php
require_once('Client.php');
require_once('Produit.php');
require_once('DateDeVente.php');
class Vente{
   protected int $quantite;
   protected int $prix;
   protected int $avance;
   protected string $facture;
   protected string $paiement;
   protected Vente  $client;
   protected Produit $produit;
   protected DateDeVente $dateDeVente;

//Methoses
        //Constructeurs
        public function __construct()
        {
            
        }
        //Getters permet d'obtenir la valeur d'un attribut private ou protected
        public function getquantite():int{
            return $this->quantite;
           
        }
        public function getprix(): int{
            return $this->prix;
        }
        public function getavance():int{
            return $this->avance;
        }
        public function getfactuture():string{
            return $this->facture;
        }
        public function getpaiement():string{
            return $this->paiement;
        }
    
        //Setters
        public function setquantite($quantite):void{
            $this->quantite=$quantite;
        }
        public function setprix($prix):void{
            $this->prix=$prix;
        }
        public function setavance($avance):void{
            $this->avance=$avance;
        }
        public function setadresse($facture):void{
            $this->facture=$facture;
        }
        public function setmontant($montant):void{
            $this->montant=$montant;
        }
        public function setpaiement($paiement):void{
            $this->paiement=$paiement;
        }
        public function setfacture($facture):void{
            $this->facture=$facture;
        }
       

}