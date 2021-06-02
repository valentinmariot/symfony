<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Excercices PHP | Symfony</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./style.css" rel="stylesheet">
    </head>
    <body>

    

<?php

use MesProduits\Produit;
use MesProduits\ProduitsParLots;
// use MesProduits\MesProduitsWithAbstract\ProduitAbstract;

    // spl_autoload_register(function ($class) {
    //     include $class.'.php';
    // });

    include 'MesProduits/Produit.php';
    include 'MesProduits/ProduitsParLots.php';
    // include 'MesProduits/MesProduitsWithAbstract/ProduitAbstract';
    
    //Create Canon Object
    $imprimante = new Produit('Canon', 34, 99.99);
    
    echo $imprimante;
    echo $imprimante->ajouterProduit(5);
    echo $imprimante->supprimerProduit(39);
    echo $imprimante->afficherProduit();
    
    
    //Create MacBook Object
    $macbook = new Produit('MacBook Pro', 3, 4999.99);
    echo $macbook->afficherProduit();
    

    //Create iPhone Object
    $iphone = new Produit('iPhone 12 Pro Max', 0, 1299.99);
    echo $iphone->afficherProduit();
    

    //Create cartouchesEncre Object
    $cartouchesEncre = new ProduitsParLots('E555 Black', 0, 37.45, 10);
    $cartouchesEncre->setNbArticlesParLot(10);
    $cartouchesEncre->ajouterProduit(10);
    echo $cartouchesEncre->afficherProduit();
    echo "Il existe actuellement ".Produit::$nbProduits." produit(s)";
    
    


?>
    </body>
</html>