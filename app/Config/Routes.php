<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::bundesland');
$routes->get('station/(:num)', 'Main::station/$1');
$routes->get('mereni/(:num)', 'Main::mereni/$1');
$routes->get('info/(:num)', 'Main::info/$1');
$routes->get('statystanice/', 'Main::statystanice/');
$routes->get('mazani', 'Main::mazani');
$routes->post('mazani/smazat', 'Main::smazatData');

