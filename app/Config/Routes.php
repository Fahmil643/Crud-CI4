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

// upload file
$routes->get('lihat_data/12', 'Mahasiswa::lihat');
$routes->get('lihat_data/13', 'Mahasiswa::lihat');
$routes->get('lihat_data/14', 'Mahasiswa::lihat');
$routes->post('/upload', 'Mahasiswa::upload');


// routes read
$routes->get('/read', 'Mahasiswa::read');


// table ke 2
$routes->get('/datatable', 'Table2::index');
$routes->get('data/data_table', 'Table2::data_table');
$routes->get('data_table', 'Table2::data_table');
$routes->get('/add_data_table', 'Table2::add_data_table');
$routes->post('/proses_data_table', 'Table2::proses_data_table');
