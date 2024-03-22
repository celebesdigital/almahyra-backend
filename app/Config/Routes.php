<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group("backend", ["filter" => "authFilter"], function ($routes) {
	$routes->get('', 'BackEnd\Home::index');

	$routes->get('stok', 'BackEnd\Stok::index');
	$routes->get('kantor/stok', 'BackEnd\Stok::index');
	$routes->get('mitra/stok', 'BackEnd\Stok::index');

	$routes->get('mutasi', 'BackEnd\Mutasi::index');
	$routes->post('mutasi', 'BackEnd\Mutasi::index');
	$routes->get('mutasi/order', 'BackEnd\Mutasi::order');
	$routes->get('mutasi/order/(:num)', 'BackEnd\Mutasi::detail/$1');
	$routes->get('mutasi/jual', 'BackEnd\Mutasi::jual');
	$routes->post('mutasi/jual', 'BackEnd\Mutasi::jual');
});

$routes->get('/', 'FrontEnd\Home::index');
$routes->get('/login', 'FrontEnd\Registrasi::login');
$routes->post('/login', 'FrontEnd\Registrasi::login');

$routes->get('/registrasi', 'FrontEnd\Registrasi::registrasi');
$routes->post('/registrasi', 'FrontEnd\Registrasi::registrasi');

$routes->get('/logout', 'FrontEnd\Registrasi::logout');