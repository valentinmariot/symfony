<?php
namespace MesProduits;

use MesProduitsWithAbstract\ProduitAbstract;
// include 'MesProduitsWithAbstract/ProduitAbstract';

class Produit extends ProduitAbstract
{
    // protected  $nom;
    // protected  $quantite;
    // protected  $prix;
    // protected  $rupture = false;
 
    // static $nbProduits;
    // const DEVISE = '&euro;';
    
    
    function __construct(string $nom, int $quantite, float $prix, bool $rupture=false)
    {
        $this->setNom($nom);
        $this->setQuantite($quantite);
        $this->setPrix($prix);
        $this->setRupture($rupture);
        ++self::$nbProduits;
    }

    function __toString()
    {
        return "
            <div class='block'>
                <h1>Informations __toString</h1>
                <p>Nom du produit : ".$this->nom."<br>
                Prix du produit : ".$this->prix." ".self::DEVISE." <br>
                Quantité du produit : ".$this->quantite."</p><br>
            </div>
        ";
    }


    function getNom()
    {
        return var_dump($this->nom);
    }

    function setNom($value)
    {
        if (!is_string($value)){
            echo '<p>Le nom doit être une chaine de caractères</p>';
        }else{ $this->nom = $value;
        }
    }


    function getQuantite()
    {
        return $this->quantite;
    }

    function setQuantite($value)
    {
        if (!is_int($value)) {
            echo 'La quantite doit être un entier';
        }else{ $this->quantite = $value;
        }
    }


    function getRupture()
    {
        return $this->rupture;
    }

    function setRupture($value)
    {
        if (!is_bool($value)){
            echo 'Le stock doit être un booléen';
        }else{ $this->rupture = $value;
        }
    }


    function getPrix()
    {
        return $this->prix;
    }

    function setPrix($value)
    {
        if (!is_numeric($value)){
            echo 'Le prix doit être un nombre';
        }else{ $this->prix = $value;
        }
    }


    // function __get($info)
    // {
    //     return $this->info;
    // }

    // function __set($info, $value)
    // {
    //     if ($info == 'nom' && !is_string($value)){
    //         echo 'Le nom doit être une chaine de caractères';
    //     } else if ($info == 'quantite' && !is_int($value)){
    //             echo 'La quantite doit être un entier';
    //     } else if ($info == 'prix' && !is_numeric($value)){
    //             echo 'Le prix doit être un nombre';
    //     } else if ($info == 'rupture' && !is_bool($value)){
    //             echo 'Le stock doit être un booléen';
    //     } else {
    //         $this->info = $value;
    //     }
    // }
    

    function afficherProduit()
    {
        $this->rupture = $this->quantite == 0  ? true : false;
        $stock = ($this->rupture)? 'Rupture de stock.' : 'En stock.';
     
        return "
            <div class='block'>
                <h1>Informations d'affichage</h1>
                <p>Nom du produit : ".$this->nom.". <br>
                Prix du produit : ".$this->prix."  ".self::DEVISE." <br>
                Quantité du produit : ".$this->quantite.". <br>
                $stock </p><br>
            </div>
        ";
    }
    
    function ajouterProduit($choice)
    {    
        $add = $this->quantite +$choice;
        $this->quantite = $add; 

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

        return "
            <div class='block'>
                <h2>Retrait de produit</h2>
                <p class='supp'>Vous avez $remove produtis.</p><br>
            </div>
        ";
    }

}

