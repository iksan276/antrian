<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'PengunjungController::index');
$routes->get('pengunjung', 'PengunjungController::index');
$routes->post('pengunjung/submit', 'PengunjungController::submit');
$routes->get('layanan', 'LayananController::index');
$routes->post('layanan/simpan', 'LayananController::simpan');
$routes->get('rekap', 'RekapController::index');
$routes->post('rekap/loadData', 'RekapController::loadData');

$routes->get('antrian', 'AntrianController::index');
$routes->get('antrian/ambil/(:segment)', 'AntrianController::ambil/$1');
$routes->post('antrian/ambil/(:segment)', 'AntrianController::ambil/$1');

$routes->get('/antrian/panggil', 'AntrianController::panggilBerikutnya');
$routes->get('/kepuasan', 'KepuasanController::index');
$routes->post('/kepuasan/simpan', 'KepuasanController::simpan');
$routes->get('/panggilan', 'PanggilanController::index');
$routes->get('/panggilan/panggil/(:num)', 'PanggilanController::panggil/$1');
$routes->get('/panggilan/mulaiLayanan/(:num)', 'PanggilanController::mulaiLayanan/$1');
$routes->get('/panggilan/selesaiLayanan/(:num)', 'PanggilanController::selesaiLayanan/$1');
$routes->get('/panggilan/ulang/(:num)', 'PanggilanController::ulang/$1');


$routes->get('register', 'AuthController::register');
$routes->post('save', 'AuthController::save');
$routes->get('login', 'AuthController::login');
$routes->post('authenticate', 'AuthController::authenticate');
$routes->get('logout', 'AuthController::logout');

// === ROUTE UNTUK KEPALA PLT ===
//$routes->get('kepala/login', 'KepalaController::login');
//$routes->post('kepala/login', 'KepalaController::loginPost');
//$routes->get('kepala/logout', 'KepalaController::logout');

//== Dasboard==
$routes->get('/kepala/login', 'KepalaController::login');
$routes->post('/kepala/login', 'KepalaController::proses_login');
$routes->get('/kepala/logout', 'KepalaController::logout');
$routes->get('/kepala/dashboard', 'KepalaController::dashboard');

// === REKAP ANTRIAN ===
$routes->get('kepala/rekap-antrian', 'KepalaController::rekap_antrian');
$routes->get('kepala/rekap_antrian', 'KepalaController::rekap_antrian');
// === REKAP KEPUASAN ===
$routes->get('kepala/rekap-kepuasan', 'KepalaController::rekap_kepuasan');
$routes->get('kepala/rekap_kepuasan', 'KepalaController::rekap_kepuasan');
// kelola user
$routes->get('/kepala/kelola_user', 'KepalaController::kelola_user');
$routes->get('/kepala/tambah_user', 'KepalaController::tambah_user');
$routes->post('/kepala/simpan_user', 'KepalaController::simpan_user');
$routes->get('/kepala/delete/(:num)', 'KepalaController::delete_user/$1');




// Gunakan filter auth pada dashboard

$routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']);
$routes->get('panggilan', 'PanggilanController::index', ['filter' => 'auth']);
$routes->get('referensi', 'ReferensiController::index', ['filter' => 'auth']);
$routes->get('referensi/audio', 'ReferensiController::show', ['filter' => 'auth']);
$routes->get('layar', 'LayarController::index', ['filter' => 'auth']);
$routes->get('/rekap-kepuasan', 'Kepuasan::rekap', ['filter' => 'auth']);
