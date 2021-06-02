<?php
namespace MesProduits\MesProduitsWithAbstract;


abstract class ProduitAbstract implements ProduitInterface
{
    protected  $nom;
    protected  $quantite;
    protected  $prix;
    protected  $rupture = false;
 
    static $nbProduits;


    abstract function __toString();
    
    abstract function ajouterProduit($choice);

    abstract function supprimerProduit($choice);
    
}
