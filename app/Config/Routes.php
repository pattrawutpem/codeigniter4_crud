<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index'); 
$routes->get('tables', 'Pages::table');
$routes->get('pageInsertUser', 'Pages::pageInsertUser');
$routes->post('submit-form-user', 'Pages::CreateUser');
$routes->get('userGetID/(:any)', 'Pages::userShowByID/$1');
$routes->post('updateU/(:any)', 'Pages::updateUser/$1');
$routes->post('deleteU/(:any)', 'Pages::deleteUsers/$1');
$routes->get('(:any)', 'Pages::views/$1');