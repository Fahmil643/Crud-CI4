<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/data', 'Mahasiswa::index');
$routes->get('/add_data_kantor', 'Mahasiswa::add_data_kantor');
$routes->post('/proses_add_kantor', 'Mahasiswa::proses_add_kantor');
$routes->get('/data/kelas', 'Mahasiswa::index');
$routes->get('/edit_data_kantor/(:any)', 'Mahasiswa::edit_data_kantor/$1');
$routes->post('/proses_edit_kantor', 'Mahasiswa::proses_edit_kantor');
$routes->get('/delete_data_kantor/(:any)', 'Mahasiswa::delete_data_kantor/$1');
$routes->get('/logout', 'Mahasiswa::logout');


$routes->get('news/index', 'News::index', ['filter' => 'role:administrator, user']);
$routes->get('news/add', 'News::add', ['filter' => 'role:administrator']);
