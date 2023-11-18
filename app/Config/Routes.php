<?php

use CodeIgniter\Router\RouteCollection;


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// Route since we don't have to scan directories.
$routes->get('/', 'CRUD::index');
$routes->get('user-form', 'CRUD::create');
$routes->post('submit-form', 'CRUD::store');
$routes->get('edit-view/(:num)', 'CRUD::singleUser/$1');
$routes->post('update', 'CRUD::update');
$routes->get('delete/(:num)', 'CRUD::delete/$1');