<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

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
$routes->setDefaultController('Homepage');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


$routes->get('dashboard', 'Admin\Login::index');

$routes->group('/', function ($routes) {
    $routes->add('', 'Front\HomePage::index');
    $routes->add('', 'Front\HomePage::produk');
    $routes->add('/daftar', 'Front\Pelanggan::index');
    $routes->add('/login', 'Front\Pelanggan::login');
    $routes->add('/logout', 'Front\Pelanggan::logout');
    $routes->add('buah', 'Front\HomePage::buah');
    $routes->add('dessert', 'Front\HomePage::dessert');
    $routes->add('jajan', 'Front\HomePage::jajan');
    $routes->add('makanan', 'Front\HomePage::makanan');
    $routes->add('minuman', 'Front\HomePage::minuman');
});
//$routes->get('/kategori', 'Admin\Kategori::kategori');

$routes->group('admin', ['filter' => 'Auth'], function ($routes) {
    $routes->add('/', 'Admin\AdminPage::index');
    $routes->add('kategori', 'Admin\Kategori::read');
    $routes->add('kategori/create', 'Admin\Kategori::create');
    $routes->add('kategori/find/(:any)', 'Admin\Kategori::find/$1');
    $routes->add('kategori/insert', 'Admin\Kategori::insert');
    $routes->add('kategori/delete/(:any)', 'Admin\Kategori::delete/$1');
    $routes->add('kategori/update', 'Admin\Kategori::update');

    $routes->add('menu', 'Admin\Menu::index');
    $routes->add('menu/(:any)', 'Admin\Menu::read/$1');
    $routes->add('menu/create', 'Admin\Menu::create');
    $routes->add('menu/find/(:any)', 'Admin\Menu::find/$1');
    $routes->add('menu/delete/(:any)', 'Admin\Menu::delete/$1');
    $routes->add('menu/update', 'Admin\Menu::update');

    $routes->add('pelanggan', 'Admin\Pelanggan::index');
    $routes->add('pelanggan', 'Admin\Pelanggan::read');
    $routes->add('pelanggan/create', 'Admin\Pelanggan::create');
    $routes->add('pelanggan/find/(:any)', 'Admin\Pelanggan::find/$1');
    $routes->add('pelanggan/insert', 'Admin\Pelanggan::insert');
    $routes->add('pelanggan/delete/(:any)', 'Admin\Pelanggan::delete/$1');
    $routes->add('pelanggan/update', 'Admin\Pelanggan::update');

    $routes->add('order', 'Admin\Order::index');
    $routes->add('order', 'Admin\Order::read');
    $routes->add('order/create', 'Admin\Order::create');
    $routes->add('order/find/(:any)', 'Admin\Order::find/$1');
    $routes->add('order/insert', 'Admin\Order::insert');
    $routes->add('order/delete/(:any)', 'Admin\Order::delete/$1');
    $routes->add('order/update', 'Admin\Order::update');

    $routes->add('orderdetail', 'Admin\OrderDetail::index');
    $routes->add('orderdetail', 'Admin\OrderDetail::read');
    $routes->add('orderdetail/create', 'Admin\OrderDetail::create');
    $routes->add('orderdetail/find/(:any)', 'Admin\OrderDetail::find/$1');
    $routes->add('orderdetail/insert', 'Admin\OrderDetail::insert');
    $routes->add('orderdetail/delete/(:any)', 'Admin\OrderDetail::delete/$1');
    $routes->add('orderdetail/update', 'Admin\OrderDetail::update');

    $routes->add('user', 'Admin\User::index');
    $routes->add('user', 'Admin\User::read');
    $routes->add('user/create', 'Admin\User::create');
    $routes->add('user/find/(:any)', 'Admin\User::find/$1');
    $routes->add('user/insert', 'Admin\User::insert');
    $routes->add('user/delete/(:any)', 'Admin\User::delete/$1');
    $routes->add('user/update', 'Admin\User::update');
});


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
