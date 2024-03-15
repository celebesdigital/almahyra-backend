<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BackEnd\Home::index');

$routes->get('/stok', 'BackEnd\Stok::index');