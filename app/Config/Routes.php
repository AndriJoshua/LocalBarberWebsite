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
//$routes->get('/', 'ImageController::index');


