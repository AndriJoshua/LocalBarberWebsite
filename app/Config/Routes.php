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
//$routes->post('/storeuser','AuthController::storeuser');
$routes->post('api/auth/register', 'TestApiAuth::register');


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

//$routes->get('/reservations', 'ReservationController::index');
$routes->post('/reservations/store', 'ReservationController::store');


$routes->get('/user_reservations', 'ReservationController::userReservations');

$routes->resource('reservations', ['controller' => 'ReservationApi']);
$routes->get('/reservations-crud', 'ReservationApi::crudView');

$routes->post('api/admins', 'AdminController::create');

$routes->get('/admin_login', 'AdminAuthController::login');
$routes->post('admin/login', 'AdminAuthController::processLogin');
$routes->get('admin/logout', 'AdminAuthController::logout');

$routes->get('admin/dashboard', function () {
    if (!session()->get('is_admin_logged_in')) {
        return redirect()->to(base_url('admin_login'));
    }
    return view('admin/dashboard');
});

// Halaman Dashboard Admin
$routes->get('admin/dashboard', 'AdminController::dashboard');

// API untuk Reservasi
$routes->get('admin/api/reservations', 'AdminController::apiReservations');
$routes->delete('admin/api/reservations/(:num)', 'AdminController::deleteReservation/$1');










$routes->group('api', function($routes) {
    $routes->resource('users', ['controller' => 'UserController']);
});
$routes->get('/users','UserController::tampil');
$routes->get('/user', 'UserFormController::index');
$routes->post('/user/save', 'UserFormController::save');





