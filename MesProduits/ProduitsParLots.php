<?php
namespace MesProduits;

class ProduitsParLots extends Produit
{
    private $nbArticlesParLot;

    function __construct(string $nom, int $quantite, float $prix, int $nbArticlesParLot, bool $rupture =false)
    {
        $this->setNbArticlesParLot($nbArticlesParLot);
        // $this->nbArticlesParLot = $nbArticlesParLot;

        Produit::__construct($nom, $quantite, $prix, $rupture);
    }
    

    function getNbArticlesParLot()
    {
        return $this->nbArticlesParLot;
    }

    function setNbArticlesParLot($value)
    {
        if (!is_integer($value)) {
            echo 'Require integer entrie';
        }else{ $this->nbArticlesParLot = $value;
        }
    }


    function ajouterProduit($choice)
    {    
        $add = $this->quantite + $choice;
        $this->quantite = $add; 
        if($this->quantite > 0) $this->rupture = false;

        return "
            <div class='block'>
                <h2>Ajout de produit</h2>
                <p class='add'>Vous avez $add produtis.</p><br>
            </div>
        ";
    }
    
    function supprimerProduit($choice)
    {    
        $remove = $this->quantite - $choice;
        $this->quantite = $remove;
        if($this->quantite <= 0) $this->quantite = 0 && $this->rupture = true;

        return "
            <h2>Retrait de produit</h2>
            <p class='supp'>Vous avez $remove produtis.</p><br>
        ";
    }


}
