<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::index');
//$routes->get('login', 'UserController::login');// controller untuk auth dan login 
$routes->get('scroll', 'scrl::index');// controller untuk scrl dan view scroll
$routes->get('index_view', 'HomeController::index');   // controller untuk button home
$routes->get('about', 'HomeController::about');          // controller untuk button about
$routes->get('service', 'HomeController::service');     // controller untuk button service
$routes->get('index_view', 'HomeController::index');     // controller untuk button home
$routes->get('contact', 'HomeController::contact');          // controller untuk button contact
$routes->get('checkout', 'HomeController::checkout'); 


//contoler untuk cread checkout
$routes->get('/', 'HomeController::index');
$routes->get('about', 'HomeController::about');
$routes->get('service', 'HomeController::service');
$routes->get('contact', 'HomeController::contact');
$routes->match(['get', 'post'], 'checkout', 'HomeController::checkout');
$routes->get('login', 'HomeController::login');
$routes->get('success', 'HomeController::success'); // Tambahkan rute untuk halaman sukses




//$routes->get('login', 'LoginController::index');    // controller dan model untuk  login
//$routes->post('login', 'LoginController::authenticate');

$routes->get('register', 'Auth::register');                  //  controller untuk logika dafftar dan login  user
$routes->post('register', 'Auth::register');
$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');
$routes->get('logout', 'Auth::logout');




$routes->get('/contact_us', 'ContactUsController::index');                      // logika untuk contact 
$routes->post('/contact_us/saveContact', 'ContactUsController::saveContact');

// dashboard untuk control admin
$routes->get('pages/dashboard', 'Pages::dashboard');
//$routes->get('pages/login', 'Pages::login');
//$routes->get('pages/register', 'Pages::register');
//$routes->get('pages/profil', 'Pages::profil');
//$routes->get('pages/logout', 'Pages::logout');
//$routes->match(['get', 'post'], 'pages/logout', 'Admin::logout');


$routes->get('/pages/login', 'AdminController::login');
$routes->post('/pages/login', 'AdminController::login');
$routes->get('/pages/logout', 'AdminController::logout');
$routes->get('/pages/dashboard', 'AdminController::index');




//dashboar untuk controll pages
$routes->get('local/about', 'local::about');
$routes->get('local/contact', 'local::contact');
$routes->get('local/service', 'local::service');



// contoler untuk read dan delete contactus admin
$routes->get('/contactread', 'ContactRead::index');
$routes->get('/pages/ContactUs', 'ContactRead::index');
$routes->post('/pages/contactread/delete/(:num)', 'ContactRead::delete/$1');
$routes->post('/contactread/delete/(:num)', 'ContactRead::delete/$1');






//controller untuk crud user
$routes->get('pages/user', 'UserController::index');
$routes->get('/user', 'UserController::index');

$routes->get('user', 'UserController::index');
$routes->get('user/update/(:num)', 'UserController::update/$1');
$routes->post('user/update/(:num)', 'UserController::processUpdate/$1');
$routes->get('user/delete/(:num)', 'UserController::delete/$1');
$routes->post('user/processUpdate/(:num)', 'UserController::processUpdate/$1');


// ...









// login admin 
//$routes->get('pages/login', 'LoginAdmin::index');
//$routes->post('/login/processLogin', 'LoginAdmin::processLogin');
//$routes->get('/logout', 'LoginAdmin::logout');

// controler login admin
//$routes->get('/pages/login', 'Admin::login');
//$routes->post('pages/login', 'Admin::login');
//$routes->post('pages/logout', 'Admin::logout');


//controler untuk crud admin parkir
$routes->get('/pages/index', 'CrudController::index');
$routes->get('/pages/create', 'CrudController::create');
$routes->post('/pages/store', 'CrudController::store');
$routes->get('/pages/edit/(:num)', 'CrudController::edit/$1');
$routes->post('/pages/update/(:num)', 'CrudController::update/$1');
$routes->get('/pages/delete/(:num)', 'CrudController::delete/$1');




//controler untuk view  parkir
$routes->get('scroll', 'scrl::index');



//controler untuk dashboard admin checkout
$routes->get('/pages/checkout', 'CheckoutController::index');
$routes->get('/checkout/delete/(:num)', 'CheckoutController::delete/$1');








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
