<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::login');
$routes->get('/admin/login-admin', 'Admin::login');
$routes->post('/admin/autentikasi', 'Admin::autentikasi');
$routes->get('/admin/logout-admin', 'Admin::logout');
$routes->get('/admin/dashboard-admin', 'Admin::dashboard');

// Routes untuk module admin
$routes->get('/admin/master-data-admin', 'Admin::master_data_admin');
$routes->get('/admin/input-data-admin', 'Admin::input_data_admin');
$routes->post('/admin/simpan-data-admin', 'Admin::simpan_data_admin');
$routes->get('/admin/edit-data-admin/(:alphanum)', 'Admin::edit_data_admin/$1');
$routes->post('/admin/update-data-admin', 'Admin::update_data_admin');
$routes->get('/admin/hapus-data-admin/(:alphanum)', 'Admin::hapus_data_admin/$1');

// Routes untuk module kategori
$routes->get('/admin/master-data-kategori', 'Admin::master_data_kategori');
$routes->get('/admin/input-data-kategori', 'Admin::input_data_kategori');
$routes->post('/admin/simpan-data-kategori', 'Admin::simpan_data_kategori');
$routes->get('/admin/edit-data-kategori/(:alphanum)', 'Admin::edit_data_kategori/$1');
$routes->post('/admin/update-data-kategori', 'Admin::update_data_kategori');
$routes->get('/admin/hapus-data-kategori/(:alphanum)', 'Admin::hapus_data_kategori/$1');

// Routes untuk module rak
$routes->get('/admin/master-data-rak', 'Admin::master_data_rak');
$routes->get('/admin/input-data-rak', 'Admin::input_data_rak');
$routes->post('/admin/simpan-data-rak', 'Admin::simpan_data_rak');
$routes->get('/admin/edit-data-rak/(:alphanum)', 'Admin::edit_data_rak/$1');
$routes->post('/admin/update-data-rak', 'Admin::update_data_rak');
$routes->get('/admin/hapus-data-rak/(:alphanum)', 'Admin::hapus_data_rak/$1');

// Routes untuk module anggota
$routes->get('/admin/master-data-anggota', 'Admin::master_data_anggota');
$routes->get('/admin/input-data-anggota', 'Admin::input_data_anggota');
$routes->get('/admin/tambah-anggota', 'Admin::input_data_anggota');
$routes->post('/admin/simpan-data-anggota', 'Admin::simpan_data_anggota');
$routes->post('/admin/simpan-anggota', 'Admin::simpan_data_anggota');
$routes->get('/admin/edit-data-anggota/(:any)', 'Admin::edit_data_anggota/$1');
$routes->get('/admin/edit-anggota/(:any)', 'Admin::edit_data_anggota/$1');
$routes->post('/admin/update-data-anggota', 'Admin::update_data_anggota');
$routes->post('/admin/update-anggota/(:any)', 'Admin::update_data_anggota/$1');
$routes->get('/admin/hapus-data-anggota/(:any)', 'Admin::hapus_data_anggota/$1');
$routes->get('/admin/hapus-anggota/(:any)', 'Admin::hapus_data_anggota/$1');

// Routes untuk module buku
$routes->get('/admin/master-data-buku', 'Admin::master_data_buku');
$routes->get('/admin/input-data-buku', 'Admin::input_data_buku');
$routes->get('/admin/tambah-buku', 'Admin::input_data_buku');
$routes->post('/admin/simpan-data-buku', 'Admin::simpan_data_buku');
$routes->post('/admin/simpan-buku', 'Admin::simpan_data_buku');
$routes->get('/admin/edit-data-buku/(:any)', 'Admin::edit_data_buku/$1');
$routes->get('/admin/edit-buku/(:any)', 'Admin::edit_data_buku/$1');
$routes->post('/admin/update-data-buku', 'Admin::update_data_buku');
$routes->post('/admin/update-buku', 'Admin::update_data_buku');
$routes->get('/admin/hapus-data-buku/(:any)', 'Admin::hapus_data_buku/$1');
$routes->get('/admin/hapus-buku/(:any)', 'Admin::hapus_data_buku/$1');

// Routes untuk transaksi peminjaman
$routes->get('/admin/data-transaksi-peminjaman', 'Admin::data_transaksi_peminjaman');
$routes->get('/admin/peminjaman-step1', 'Admin::peminjaman_step1');
$routes->post('/admin/peminjaman-step2', 'Admin::peminjaman_step2');
$routes->get('/admin/peminjaman-step2', 'Admin::peminjaman_step2_get');
$routes->post('/admin/simpan-temp-pinjam', 'Admin::simpan_temp_pinjam');
$routes->get('/admin/simpan-temp-pinjam/(:any)', 'Admin::simpan_temp_pinjam_get/$1');
$routes->get('/admin/hapus-temp/(:any)', 'Admin::hapus_temp/$1');
$routes->post('/admin/simpan-transaksi-peminjaman', 'Admin::simpan_transaksi_peminjaman');
$routes->get('/admin/cetak-peminjaman/(:alphanum)', 'Admin::cetak_peminjaman/$1');

// Routes untuk transaksi pengembalian
$routes->get('/admin/data-transaksi-pengembalian', 'Admin::data_transaksi_pengembalian');
$routes->get('/admin/kembalikan-buku/(:any)/(:any)', 'Admin::kembalikan_buku/$1/$2');