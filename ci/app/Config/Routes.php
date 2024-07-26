<?php

namespace Config;

$routes = Services::routes();

use CodeIgniter\Router\RouteCollection;

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
// $routes->get('/Mahasiswa', 'Mahasiswa::index');
// $routes->get('/Perpustakaan', 'Perpustakaan::index');
// $routes->get('/Perpus', 'Perpus::index');
// $routes->get('/MahasiswaBaru', 'MahasiswaBaru::index');
// $routes->post('/proses_add_data', 'TambahData::proses_add_data');
// $routes->get('/Tambah_data', 'TambahData::index');
// $routes->delete('/proses_delete_data/(:num)', 'Perpus::proses_delete_data/$1');
// $routes->get('/Edit_data/(:segment)', 'Perpus::edit/$1');
// $routes->post('/Edit_data/proses_update/(:any)', 'Perpus::proses_update/$1');

//PETTOPIA
$routes->setAutoRoute(true);
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('AdminController');
$routes->setDefaultMethod('');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

//halaman home
$routes->get('Pettopia', 'pettopia::index');

//halaman sign in dan sign up
$routes->get('/auth/login', 'Auth::process');
$routes->get('/auth', 'Auth::index');
$routes->get('/auth/register', 'Auth::save');
$routes->get('auth/forgot_password', 'Auth::forgot_password');
$routes->post('auth/forgot_password_process', 'Auth::forgot_password_process');
$routes->get('auth/reset_password/(:any)', 'Auth::reset_password/$1');
$routes->post('auth/reset_password_process', 'Auth::reset_password_process');

//halaman layanan
    //penitipan
    $routes->get('Penitipan', 'PenitipanController::index'); // halaman awal
    $routes->get('FormPenitipan', 'FormPHController::index'); // form booking
    $routes->get('/FormPHController/rincianPenitipanForm/(:num)', 'FormPHController::rincianPenitipanForm/$1'); // rincian form booking
    //grooming
    $routes->get('GroomingHewan', 'GroomingController::index'); // halaman awal
    $routes->get('FormGrooming', 'FormGRController::index'); // form booking
    $routes->get('/FormGRController/rincianGroomingForm/(:num)', 'FormGRController::rincianGroomingForm/$1'); // rincian form booking
    $routes->get('FormGRTerpisah', 'FormGRTerpisahController::index'); // form booking
    $routes->get('/FormGRTerpisahController/rincianGRTerpisahForm/(:num)', 'FormGRTerpisahController::rincianGRTerpisahForm/$1'); // rincian form booking
    //dokter
    $routes->get('DokterHewan', 'DokterController::index'); // halaman awal
    $routes->get('FormDrh', 'FormDrhController::index'); // form booking
    $routes->get('/FormDrhController/rincianDokterForm/(:num)', 'FormDrhController::rincianDokterForm/$1'); //rincian form booking
    //konsultasi
    $routes->get('/FormKonsultasi', 'FormKonsultasiController::index'); // form booking
    $routes->post('/formkonsultasi/submit', 'FormKonsultasiController::submit'); // submit form booking

//halaman produk
$routes->get('/category/(:num)', 'ProdukController::viewCategory/$1'); // produk sesuai kategori
$routes->get('produk/detail/(:num)', 'ProdukController::detail/$1'); // rincian produk
$routes->post('produk/addToCart/(:num)', 'ProdukController::addToCart/$1'); // menambahkan produk ke keranjang
$routes->get('produk/viewCart', 'ProdukController::viewCart'); // keranjang produk
$routes->get('produk/removeFromCart/(:num)', 'ProdukController::removeFromCart/$1'); // menghapus produk dari keranjang

//halaman articles dan promotion
$routes->get('Articels', 'ArticlesController::index');
$routes->get('Promotion', 'PromotionController::index');

//halaman my order
$routes->get('/MyOrder', 'MyOrderController::index');
$routes->get('myorder/rincianph/(:num)', 'MyOrderController::rincianph/$1'); // rincian pesanan penitipan hewan
$routes->get('myorder/rinciangr/(:num)', 'MyOrderController::rinciangr/$1'); // rincian pesanan grooming
$routes->get('myorder/rinciangrterpisah/(:num)', 'MyOrderController::rinciangrterpisah/$1'); // rincian pesanan grooming terpisah
$routes->get('myorder/rinciandr/(:num)', 'MyOrderController::rinciandr/$1'); // rincian pesanan dokter

//halaman admin
$routes->get('admin', 'AdminController::index'); // dashboard admin
    //produk
        //rincian produk
        $routes->get('admin/tablesProduct', 'AdminController::tablesProduct');
        $routes->get('admin/editProduct/(:num)', 'AdminController::editProduct/$1');
        $routes->post('admin/updateProduct/(:num)', 'AdminController::updateProduct/$1');
        $routes->delete('admin/deleteProduct/(:num)', 'AdminController::deleteProduct/$1');
        //form tambah produk
        $routes->get('admin/showAddProductForm', 'AdminController::showAddProductForm');
        $routes->post('admin/addProduct', 'AdminController::addProduct');
    //layanan
        //penitipan hewan
        $routes->get('admin/FormPenitipanHewan', 'AdminController::FormPenitipanHewan');
        $routes->delete('admin/deletePenitipanHewan/(:num)', 'AdminController::deletePenitipanHewan/$1');
        //grooming hewan
        $routes->get('admin/FormGroomingHewan', 'AdminController::FormGroomingHewan');
        $routes->delete('admin/deleteGroomingHewan/(:num)', 'AdminController::deleteGroomingHewan/$1');
        //dokter hewan
        $routes->get('admin/FormDokterHewan', 'AdminController::FormDokterHewan');
        $routes->delete('admin/deleteDokterHewan/(:num)', 'AdminController::deleteDokterHewan/$1');
    //user
    $routes->get('admin/User', 'AdminController::User');
    $routes->delete('admin/deleteUser/(:num)', 'AdminController::deleteUser/$1');