<?php

use App\Controllers\Profile;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rute untuk halaman login
//$routes->get('/', 'Login::index');
//$routes->get('login', 'Login::index');
//$routes->post('login/authenticate', 'Login::authenticate');

//Routes Rencana 2
/*$routes->get('/','HelloWorld::index');
$routes->post('/storeuser','AuthController::storeuser');
$routes->get('/UserLogin', 'UserLogin::index', ['as' => 'user.login']);
$routes->get('/Home','Home::index');
$routes->get('/register','UserRegister::index');
$routes->get('/login','UserLogin::index');
$routes->post('/loginuser','AuthController::loginuser');
$routes->get('/dashboard_user','AuthController::dashboard_user');
$routes->get('/logout','AuthController::logout');
$routes->get('/UserLogin', 'UserLogin::index');
*/

//$routes->get('/', 'ImageController::index');

//Routes rencana 3
$routes->get('/', 'test::index');
$routes->get('test','test::index');
$routes->post('/storeuser','AuthController::storeuser');
$routes->get('/UserLogin', 'UserLogin::index', ['as' => 'user.login']);
$routes->get('/Home','Home::index');
$routes->get('/register','UserRegister::index');
$routes->get('/login','UserLogin::index');
$routes->post('/loginuser','AuthController::loginuser');
$routes->get('/dashboard_user','AuthController::dashboard_user');
$routes->get('/logout','AuthController::logout');
$routes->get('/UserLogin', 'UserLogin::index');
$routes->get('/booking','booking::index');
$routes->get('/profile','Profile::index');
$routes->post('/UpdateUsername','ProfileUpdate::UpdateUsername');
$routes->post('/updatePhoto','ProfileUpdate::updatePhoto');