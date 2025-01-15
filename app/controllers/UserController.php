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

    public function sign_in() {
        $name = $_POST['name'];
        $password1 = $_POST['motdepasse1'];
        $password2 = $_POST['motdepasse2'];
        // echo strcmp($password1, $password2);
        if (strcmp($password1, $password2) != 0) {
            $data = ['viewName' => 'viewForm', 'action' => 'sign_in'];
            // echo ("Bonour");
            Flight::render('connexion', $data);
        }

        $user['NAME'] = $name;
        $user['PASSWORD'] = $password1;

        $user = Flight::userModel()->createUser($user);

        Flight::redirect("/client/home");
        // echo $name, $password1, $password2;
    }


}