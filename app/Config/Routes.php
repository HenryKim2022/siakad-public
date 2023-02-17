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
$routes->setDefaultController('Web');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->add('/', 'Home::index');
$routes->get('/', 'Pages\FrontWeb::index');

$routes->get('/auth/signup', 'Auth::signup');
$routes->post('/auth/savereg', 'Auth::savereg');
$routes->get('/auth/signin', 'Auth::signin');
$routes->post('/auth/checklog', 'Auth::checklog');
$routes->post('/auth/checklogin', 'Auth::checklogin');
$routes->post('/auth/editreg', 'Auth::editreg');
$routes->add('/auth/signout', 'Auth::signout');
$routes->get('/myprofile', 'Pages\MyProfile::index');
$routes->get('/myprofile/test', 'Pages\MyProfile::index');


$routes->get('/home', 'Pages\Home::index');
$routes->get('/news', 'Pages\FrontWeb::index');

$routes->get('/help', 'Pages\FrontWeb::help');
$routes->get('/help/about-us', 'Pages\FrontWeb::aboutus');
$routes->get('/help/supports', 'Pages\FrontWeb::supports');
$routes->get('/help/contacts', 'Pages\FrontWeb::contacts');
$routes->get('/help/contacts/email-us', 'Pages\FrontWeb::emailus');
$routes->get('/help/contacts/call-us', 'Pages\FrontWeb::callus');

$routes->get('/admin/m11', 'Users\Admins::menu1');
$routes->get('/admin/m21', 'Users\Admins::menu21');
$routes->get('/admin/students-data', 'Pages\Students_Data::index');
$routes->post('/admin/students-data/add', 'Pages\Students_Data::add');
$routes->get('/admin/students-data/details-(:any)', 'Pages\Students_Data::details/$1');
$routes->get('/admin/students-data/edit-(:any)', 'Pages\Students_Data::edit/$1');
$routes->get('/admin/students-data/delete-(:any)', 'Pages\Students_Data::delete/$1');









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
