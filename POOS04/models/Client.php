<?php
require_once('Vente.php');
class Client{
    private string $nom;
    private string $prenom;
    private int $tel;
    private string $adresse;
    private int $montant;
    //private Vente $vente=[];

//Methoses
        //Constructeurs
        public function __construct()
        {
            
        }
        //Getters permet d'obtenir la valeur d'un attribut private ou protected
        public function getnom():string{
            return $this->nom;
           
        }
        public function getprenom(): string{
            return $this->prenom;
        }
        public function gettel():int{
            return $this->tel;
        }
        public function getadress():string{
            return $this->adresse;
        }
        public function getmontant():int{
            return $this->montant;
        }
        //Setters
        public function setnom($nom):void{
            $this->nom=$nom;
        }
        public function setprenom($prenom):void{
            $this->prenom=$prenom;
        }
        public function settel($tel):void{
            $this->tel=$tel;
        }
        public function setadresse($adresse):void{
            $this->adresse=$adresse;
        }
        public function setmontant($montant):void{
            $this->montant=$montant;
        }
       

}