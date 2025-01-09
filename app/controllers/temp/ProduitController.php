<?php

namespace app\controllers;

use app\models\ProduitModel;
use app\models\CategorieModel;
use Flight;

include("Tools.php");



class ProduitController {

	public function __construct() {

	}

    function getProduitPrepare($produits) {
        foreach ($produits as &$produit) {
            // Calcul du prix réduit si promotion
            if ($produit['POURCENTAGE_PROMOTION'] > 0) {
                $produit['PRICE_REDUCE'] = calculerSoustractionPourcentage($produit['PRICE'], $produit['POURCENTAGE_PROMOTION']);
            } else {
                $produit['PRICE_REDUCE'] = null;
            }
            
            // Conversion des étoiles en chaîne prête à l'affichage
            $produit['STAR_STRING'] = getStringStars($produit['NBR_STARS']);
        }
        return $produits;
    }

    public function home() {
        $produits = Flight::produitModel()->getAllProduit();
        $categories = Flight::categorieModel()->getAllCategories();
        $data = ['produits' => $produits, 'categories' => $categories];
        Flight::render('produit', $data);
    }

    public function produit() {
        $produits = Flight::produitModel()->getAllProduit();
        $data = ['produits_list' => $produits];
        Flight::render('produitSection', $data);
    }

    public function insertProduit() {
        $categorie = Flight::categorieModel()->getAllCategories();
        //$produits = ['Nom_produit' => "phone"];

        $data = ['categories' => $categorie];
        Flight::render('FormProduit', $data);
    }

    
}