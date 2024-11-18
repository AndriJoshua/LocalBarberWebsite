<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Rute untuk halaman login
//$routes->get('/', 'Login::index');
//$routes->get('login', 'Login::index');
//$routes->post('login/authenticate', 'Login::authenticate');
$routes->get('/','HelloWorld::index');
$routes->post('/storeuser','AuthController::storeuser');
$routes->get('/UserLogin', 'UserLogin::index', ['as' => 'user.login']);
$routes->get('/Home','Home::index');
$routes->get('/register','UserRegister::index');
$routes->get('/login','UserLogin::index');
//$routes->get('/', 'ImageController::index');


