<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Login::index');
$routes->get('/home', 'DataController::index');
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

// create
$routes->get('/data/data', 'DataController::create');
$routes->post('/store', 'DataController::store');
$routes->get('/edit/(:num)', 'DataController::edit/$1');
$routes->post('/update/(:num)', 'DataController::update/$1');
$routes->delete('/delete/(:any)', 'DataController::delete/$1');
$routes->get('/index', 'Pages::index');
$routes->get('/data', 'DataController::view');
$routes->get('/create', 'DataController::create');

$routes->get('/createBooking', 'BookingController::createBooking');
$routes->post('/storeBooking', 'BookingController::storeBooking');
$routes->get('/editBooking/(:num)', 'BookingController::editBooking/$1');
$routes->post('/updateBooking/(:num)', 'BookingController::updateBooking/$1');
$routes->delete('/deleteBooking/(:any)', 'BookingController::deleteBooking/$1');
// $routes->get('/index', 'Pages::index');
$routes->get('/booking', 'BookingController::view');

$routes->get('/createBookingUser', 'BookingUserController::createBooking');
$routes->post('/storeBookingUser', 'BookingUserController::storeBooking');
$routes->get('/editBookingUser/(:num)', 'BookingUserController::editBooking/$1');
$routes->post('/updateBookingUser/(:num)', 'BookingUserController::updateBooking/$1');
$routes->delete('/deleteBookingUser/(:any)', 'BookingUserController::deleteBooking/$1');
// $routes->get('/index', 'Pages::index');
$routes->get('/bookingUser', 'BookingUserController::view');

$routes->get('/data/dataDaerah', 'DaerahController::create');
$routes->post('/storeDaerah', 'DaerahController::store');
$routes->get('/editDaerah/(:num)', 'DaerahController::edit/$1');
$routes->post('/updateDaerah/(:num)', 'DaerahController::update/$1');
$routes->delete('/deleteDaerah/(:any)', 'DaerahController::delete/$1');
$routes->get('/indexDaerah', 'Pages::index');
$routes->get('/daerah', 'DaerahController::view');
$routes->get('/createDaerah', 'DaerahController::create');

$routes->get('/tampil/(:any)', 'HalamanCafe::index/$1');
$routes->get('/tampilSetiapCabang/(:any)', 'Cabang::index/$1');
$routes->get('/cabang', 'DataController::cabang');

$routes->get('/admin', 'Admin::index');
$routes->get('/bookingAdmin', 'Admin::create');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
