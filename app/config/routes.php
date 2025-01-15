<?php

use app\controllers\ApiExampleController;
use app\controllers\CategorieController;
use app\controllers\UserController;
use app\controllers\CadeauController;
use app\controllers\WelcomeController;

use flight\Engine;
use flight\net\Router;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */
/*$router->get('/', function() use ($app) {
	$Welcome_Controller = new WelcomeController($app);
	$app->render('welcome', [ 'message' => 'It works!!' ]);
});*/

$Welcome_Controller = new WelcomeController();
$router->get('/', [ $Welcome_Controller, 'launchLogin' ]); 
$router->get('/sign_in', [ $Welcome_Controller, 'launchSign_in' ]);


$User_Controller = new UserController();
$router->post('/authentification', [ $User_Controller, 'login' ]);
$router->post('/accountCreation', [ $User_Controller, 'sign_in' ]);

$Cadeau_Controller = new CadeauController();
$router->get('/client/home', [$Cadeau_Controller, 'home']);
$router->get('/admin/home', [$Cadeau_Controller, 'homeAdmin']);

// $Matiere_Controller = new MatiereController();
// $router->get('/matiere', [$Matiere_Controller, 'home']);

// $Produit_Controller = new ProduitController();
// $router->get('/produits', [$Produit_Controller, 'home']);
// $router->get('/produits/insert', [$Produit_Controller, 'insertProduit']);

// $Categorie_Controller = new CategorieController();
// $router->get('/categories', [$Categorie_Controller, 'categories']);




//$router->get('/', \app\controllers\WelcomeController::class.'->home'); 

// $router->get('/hello-world/@name', function($name) {
// 	echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
// });

// $router->group('/api', function() use ($router, $app) {
// 	$Api_Example_Controller = new ApiExampleController($app);
// 	$router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
// 	$router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
// 	$router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
// });