<?php
namespace MesProduits\MesProduitsWithAbstract;

interface ProduitInterface
{
    const DEVISE = '&euro;';


    function __toString();
    
    function ajouterProduit($choice);

    function supprimerProduit($choice);
    
}