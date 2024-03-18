<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/backend', 'BackEnd\Home::index');

$routes->get('/backend/stok', 'BackEnd\Stok::index');

$routes->get('/', 'FrontEnd\Home::index');
$routes->get('/login', 'FrontEnd\Registrasi::login');
$routes->get('/registrasi', 'FrontEnd\Registrasi::registrasi');