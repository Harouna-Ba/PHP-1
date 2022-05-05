<?php
require_once('./models/Client.php');
require_once('./models/Vente.php');
require_once('./models/Produit.php');
require_once('./models/GestionStock.php');
require_once('./models/DateDeVente.php');
//creation d'objet client
$client1=new Client();
//objet client
$vente1=new Vente();
//Objet Produit
$produit1=new Produit();
//Objet de Date de vente
$dateVente1=new DateDeVente();
//Objet GestionStpock
$gestion1=new GestionStock();
//intanciation
$gestion1->setstockInit('16729');
$gestion1->setstockRestant($stockInit-$quantiteV);
//intanciation
$dateVente1->setannee(new DateTime('2022'));
$dateVente1->setmois(new DateTime('janvier'));
$dateVente1->setjour(new DateTime('Mardi'));
//intanciation
$produit1->SetnomP('Sucre');
$produit1->SetquantiteV('9kg');
$produit1->SetprixV('3000');
//intanciation
$vente1->Setquantite('34');
$vente1->setprix('2354678');
$vente1->setfacture('N98');
$vente1->Setpaiement('credit');
$vente1->setavance('0');
//intanciation de l'objet
$client1->setnom('Dia');
$client1->setprenom('Samba');
$client1->settel('77678779');
$client1->setadresse('Dakar');
$client1->setmontant('12000');
//Afficher client
echo $client1->getnom() ."\n";
echo $client1->getprenom() ."\n";
echo $client1->gettel() ."\n";
echo $client1->getadress() ."\n";
echo $client1->getmontant() ."\n";
//Afficher vente
echo $vente1->getquantite() ."\n";
echo $vente1->getfactuture() ."\n";
echo $vente1->getpaiement() ."\n";
echo $vente1->getavance() ."\n";
echo $vente1->getprix() ."\n";
//Affichage
echo $produit1->getnomP() ."\n";
echo $produit1->getquantiteV() ."\n";
echo $produit1->getprixV() ."\n";
//Afficher Date de vente
echo $dateVente1->getannee() ."\n";
echo $dateVente1->getmois() ."\n";
echo $dateVente1->getjour() ."\n";