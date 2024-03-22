<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('backend', static function ($routes) {
    $routes->get('', 'BackEnd\Home::index');

	$routes->get('stok', 'BackEnd\Stok::index');

	$routes->get('profile', 'BackEnd\Profile::index');

	$routes->get('mitra-list', 'BackEnd\MitraList::index');
	$routes->get('mitra-list/registrasi-ao', 'BackEnd\MitraList::registrasiAo');

    $routes->group('mutasi', static function ($routes) {
        $routes->get('', 'BackEnd\Mutasi::index');
        $routes->get('order', 'BackEnd\Mutasi::order');
        $routes->get('order/(:num)', 'BackEnd\Mutasi::detail/$1');
		$routes->match(['get', 'post'],'jual', 'BackEnd\Mutasi::jual');
    });
});

$routes->get('/', 'FrontEnd\Home::index');
$routes->get('/login', 'FrontEnd\Registrasi::login');
$routes->post('/login', 'FrontEnd\Registrasi::login');

$routes->get('/registrasi', 'FrontEnd\Registrasi::registrasi');
$routes->post('/registrasi', 'FrontEnd\Registrasi::registrasi');

$routes->get('/logout', 'FrontEnd\Registrasi::logout');