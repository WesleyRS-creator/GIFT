<?php

namespace app\controllers;

use app\models\CadeauModel;
use Flight;

class CategorieController {

	public function __construct() {

	}

    public function home() {
        $categorie = Flight::categorieModel()->getAllCategories();
    
        // Envoyer les données organisées à la vue
        $data = ['categories' => $categorie];
        Flight::render('CategorieList', $data);
    }


}