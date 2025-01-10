<?php

namespace app\controllers;

use app\models\UserModel;
use Flight;

class UserController {

	public function __construct() {

	}

    public function login() {
        $name = $_POST['name'];
        $password = $_POST['motdepasse'];

        $user = Flight::userModel()->getByAuth($name, $password);

        $data = null;
        
        if ($user == null) {
            $data = ['viewName' => 'viewForm', 'action' => 'login'];
            Flight::render('connexion', $data);

        } else {

            if ($user['ADMIN'] == true) {

                //$data =  ['viewName' => 'viewCadeau', 'user' => 'admin', 'sectionName' => 'sectionChauffeur', 'filtre' => 'all'];
                //Flight::render('home', $data);
                Flight::redirect("/admin/home");
            } else {
                //$data =  ['viewName' => 'viewCadeau', 'user' => 'client', 'sectionName' => 'sectionChauffeur', 'filtre' => 'all'];
                //Flight::render('home', $data);
                Flight::redirect("/client/home");
            }
            
        }
    }


}