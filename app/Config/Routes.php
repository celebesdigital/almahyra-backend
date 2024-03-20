<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/backend', 'BackEnd\Home::index');

$routes->get('/backend/stok', 'BackEnd\Stok::index');
$routes->get('/backend/kantor/stok', 'BackEnd\Stok::index');
$routes->get('/backend/mitra/stok', 'BackEnd\Stok::index');

$routes->get('/backend/mutasi', 'BackEnd\Mutasi::index');
$routes->post('/backend/mutasi', 'BackEnd\Mutasi::index');
$routes->get('/backend/mutasi/order', 'BackEnd\Mutasi::order');
$routes->get('/backend/mutasi/order/(:num)', 'BackEnd\Mutasi::detail/$1');
$routes->get('/backend/mutasi/jual', 'BackEnd\Mutasi::jual');
$routes->post('/backend/mutasi/jual', 'BackEnd\Mutasi::jual');

$routes->get('/', 'FrontEnd\Home::index');
$routes->get('/login', 'FrontEnd\Registrasi::login');
$routes->get('/login2', 'FrontEnd\Registrasi::login2');
$routes->get('/registrasi', 'FrontEnd\Registrasi::registrasi');