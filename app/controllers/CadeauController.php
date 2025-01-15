<?php

namespace app\controllers;

use app\models\CadeauModel;
use Flight;

class CadeauController {

	public function __construct() {

	}

    public function home() {
        //$categorie = Flight::categorieModel()->getAllCategories();
    
        // Envoyer les données organisées à la vue
        $data = ['viewMenu' => 'viewMenu','user' => 'client', 'viewName' => 'viewCadeauClient'];
        Flight::render('home', $data);
    }

    public function homeAdmin() {

    }


}