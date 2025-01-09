<?php

namespace app\controllers;

use app\models\CategorieModel;
use Flight;

class CategorieController {

	public function __construct() {

	}

    public function categories() {
        $categorie = Flight::categorieModel()->getAllCategories();
    
        // Envoyer les données organisées à la vue
        $data = ['categories' => $categorie];
        Flight::render('CategorieList', $data);
    }


}