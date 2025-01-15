<?php

namespace app\controllers;

use app\models\ProduitModel;
use Flight;

class WelcomeController {

	public function __construct() {

	}

	public function launchLogin() {
        $data = ['viewName' => 'viewForm', 'action' => 'login'];
        Flight::render('connexion', $data);
    }

    public function launchSign_in() {
        $data = ['viewName' => 'viewForm', 'action' => 'sign_in'];
        Flight::render('connexion', $data);
    }

}