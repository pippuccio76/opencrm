<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','Admin::test',  ['filter' => 'adminFiltersAuth']);
$routes->get('/admin/test','Admin::test',  ['filter' => 'adminFiltersAuth']);

service('auth')->routes($routes);


$routes->group('admin', ['filter' => 'adminFiltersAuth'], function($routes) {
    /*
    $routes->match(['get','post'],'changeEmail', 'Admin::changeEmail');
    $routes->match(['get','post'],'changePassword', 'Admin::changePassword');
    $routes->match(['get','post'],'changePin', 'Admin::changePin');
    $routes->add('index', 'Admin::index');
    $routes->add('', 'Admin::index');
    */

    $routes->get("fullcalendar", "FullcalendarController::index");
    $routes->get("event", "FullcalendarController::loadData");
    $routes->post("eventAjax", "FullcalendarController::ajax");


    $routes->get('assegna_permesso/(:num)/(:any)','Admin::assegna_permesso/$1/$2');
    $routes->get('controlla_user/(:num)','Admin::controlla_user/$1');

});



####################################################################################
#                          ADMIN
####################################################################################

$routes->add('admin/logout', 'Admin::logout');


$routes->options('admin/:any', 'Admin::index');



$routes->group('admin_admin', ['filter' => 'adminFiltersAuth'], function($routes) {

    $routes->add('lista_completa', 'Admin_admin::lista_completa');
    $routes->add('modificaRecord/(:num)', 'Admin_admin::modificaRecord/$1');

});

$routes->group('admin', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'changeEmail', 'Admin::changeEmail');
    $routes->match(['get','post'],'changePassword', 'Admin::changePassword');
    $routes->match(['get','post'],'changePin', 'Admin::changePin');
    $routes->add('index', 'Admin::index');
    $routes->add('', 'Admin::index');

});

$routes->group('admin', ['filter' => 'adminFiltersNoAuth'], function($routes) {
    $routes->add('login', 'Admin::login');
    $routes->add('registration', 'Admin::registration');

});
       







$routes->group('admin_Acquisti', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Acquisti::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Acquisti::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Acquisti::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Acquisti::visualizzaRecord/$1');
    $routes->post('get_data_from_ajax', 'Admin_Acquisti::get_data_from_ajax');

});








$routes->group('admin_Clienti', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Clienti::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Clienti::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Clienti::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Clienti::visualizzaRecord/$1');
    $routes->get('eliminaRecord/(:num)', 'Admin_Clienti::eliminaRecord/$1');

});



$routes->group('admin_Events', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Events::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Events::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Events::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Events::visualizzaRecord/$1');

});



$routes->group('admin_Migrations', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Migrations::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Migrations::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Migrations::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Migrations::visualizzaRecord/$1');

});



$routes->group('admin_Prodotti', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Prodotti::inserisciRecord');
    $routes->match(['get','put'],'modificaRecord/(:num)', 'Admin_Prodotti::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Prodotti::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Prodotti::visualizzaRecord/$1');
    $routes->post('get_data_from_ajax', 'Admin_Prodotti::get_data_from_ajax');

});



$routes->group('admin_Prodotti_costi', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Prodotti_costi::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Prodotti_costi::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Prodotti_costi::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Prodotti_costi::visualizzaRecord/$1');

});



$routes->group('admin_Sedi_clienti', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Sedi_clienti::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Sedi_clienti::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Sedi_clienti::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Sedi_clienti::visualizzaRecord/$1');

});



$routes->group('admin_Settings', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Settings::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Settings::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Settings::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Settings::visualizzaRecord/$1');

});



$routes->group('admin_Stato_clienti', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Stato_clienti::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Stato_clienti::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Stato_clienti::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Stato_clienti::visualizzaRecord/$1');

});



$routes->group('admin_Users', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Users::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Users::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Users::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Users::visualizzaRecord/$1');

});



$routes->group('admin_Vendite', ['filter' => 'adminFiltersAuth'], function($routes) {
    $routes->match(['get','post'],'inserisciRecord', 'Admin_Vendite::inserisciRecord');
    $routes->match(['get','post'],'modificaRecord/(:num)', 'Admin_Vendite::modificaRecord/$1');
    $routes->get('lista_completa', 'Admin_Vendite::lista_completa');
    $routes->get('visualizzaRecord/(:num)', 'Admin_Vendite::visualizzaRecord/$1');
    $routes->post('get_data_from_ajax', 'Admin_Vendite::get_data_from_ajax');

});




$routes->group('user', ['filter' => 'usersFiltersAuth'], function($routes) {
    /*
    $routes->match(['get','post'],'changeEmail', 'Admin::changeEmail');
    $routes->match(['get','post'],'changePassword', 'Admin::changePassword');
    $routes->match(['get','post'],'changePin', 'Admin::changePin');
    $routes->add('index', 'Admin::index');
    $routes->add('', 'Admin::index');*/
    $routes->get('test','User::test');
    $routes->get('sing_in_the_rain','User::sing_in_the_rain');

});