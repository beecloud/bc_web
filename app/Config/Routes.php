<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

#$routes->get('/', 'Home::index');
$routes->get('/', 'Landingpage::index');

$routes->get('/landingpage', 'Landingpage::index');
$routes->get('/privacidad', 'Landingpage::privacidad');
$routes->get('/terminos-y-condiciones', 'Landingpage::terminos_y_condiciones');
$routes->get('/metawebhook/(:any)', 'Metawebhook::index/$1');
$routes->post('/metawebhook/(:any)', 'Metawebhook::index/$1');

$routes->get('/muy-pronto', 'Muy_pronto::index');