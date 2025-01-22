<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

#$routes->get('/', 'Home::index');
$routes->get('/', 'Muy_pronto::index');

$routes->get('/landingpage', 'Landingpage::index');
$routes->get('/privacidad', 'Landingpage::privacidad');
$routes->get('/terminos-y-condiciones', 'Landingpage::terminos_y_condiciones');

$routes->get('/muy-pronto', 'Muy_pronto::index');