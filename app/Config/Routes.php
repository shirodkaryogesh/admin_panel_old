<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/','AdminController::index');
$routes->get('/add','AdminController::add');
$routes->post('/create','AdminController::create');
$routes->get('/edit/(:any)','AdminController::edit/$1');
$routes->put('/update/(:any)','AdminController::update/$1');
$routes->get('/delete/(:any)','AdminController::delete/$1');
