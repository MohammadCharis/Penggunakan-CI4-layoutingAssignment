<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/beranda', 'Home::index');

$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('mahasiswa/create', 'Mahasiswa::create');
$routes->post('mahasiswa/store', 'Mahasiswa::store');
$routes->get('mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->post('mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');

$routes->get('dosen', 'Dosen::index');
$routes->get('dosen/create', 'Dosen::create');
$routes->post('dosen/store', 'Dosen::store');
$routes->get('dosen/edit/(:any)', 'Dosen::edit/$1');
$routes->post('dosen/update/(:any)', 'Dosen::update/$1');
$routes->post('dosen/delete/(:any)', 'Dosen::delete/$1');

$routes->get('mata-kuliah', 'MataKuliah::index');
$routes->get('mata-kuliah/create', 'MataKuliah::create');
$routes->post('mata-kuliah/store', 'MataKuliah::store');
$routes->get('mata-kuliah/edit/(:any)', 'MataKuliah::edit/$1');
$routes->post('mata-kuliah/update/(:any)', 'MataKuliah::update/$1');
$routes->post('mata-kuliah/delete/(:any)', 'MataKuliah::delete/$1');

$routes->get('/tentang', 'Home::tentang');
