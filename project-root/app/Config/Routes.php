<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/Login', 'Login::index');
// $routes->get('/Login', 'Login::index');
$routes->get('/', 'pettopia::index');
$routes->get('/Login', 'Auth::index');
$routes->setAutoRoute(true);
