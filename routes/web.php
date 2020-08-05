<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/pesenpaket', function () {
	 return view('/homeuser/pesenpaket');
});


Route::get('/','HomeController@index');
Route::get('/layouts/gallery','HomeController@gallery');
Route::get('/layouts/schedulehaji','HomeController@schedulehaji');
Route::get('daftar','HomeController@daftar');


Route::get('login', function () {
    return view('login');
});

Route::get('showblog', function () {
    return view('showblog');
});
Route::get('showtestimoni', function () {
    return view('showtestimoni');
});
Route::get('/testimoni', function () {
    return view('/admin/testimoni');
});

Route::get('/contact', function () {
    return view('/homeuser/contact');
});

Route::get('/showpesan', function () {
    return view('/homeuser/showpesan');
});

Route::get('/tambahpesan', function () {
    return view('/homeuser/tambahpesan');
});
//route buat crud muthowwif
Route::get('/muthowwif', 'MuthowwifController@index');
Route::get('/muthowwif/tambahmuthowwif','MuthowwifController@create');
Route::get('/muthowwif/editmuthowwif/{id}','MuthowwifController@edit');
Route::post('/muthowwif/proses', 'MuthowwifController@store');
Route::get('/muthowwif/destroy/{id}','MuthowwifController@destroy');
Route::get('/showmuthowwif','penggunaController@muthowwif');
Route::put('/muthowwif/update/{id}','MuthowwifController@update');

//route buat crud testimoni
Route::get('/testimoni', 'TestimoniController@index');
Route::get('/testimoni/tambahtestimoni','TestimoniController@create');
Route::get('/testimoni/edittestimoni/{id}','TestimoniController@edit');
Route::put('/testimoni/update/{id}','TestimoniController@update');
Route::get('/testimoni/destroy/{id}','TestimoniController@destroy');

Route::get('/showtestimoni','TestimoniController@show');
Route::post('/testimoni/store', 'TestimoniController@store');

//route buat crud adminn
Route::get('/adminn', 'AdminController@index');
Route::get('/adminn/tambahadminn','AdminController@tambah');
Route::post('/adminn/store','AdminController@store');
Route::get('/adminn/editadminn/{id}','AdminController@edit');
Route::post('/adminn/update','AdminController@update');
Route::get('/adminn/hapus/{id}','AdminController@hapus');
//route buat crud muthowwif
Route::get('/users', 'UsersController@index');
Route::get('/users/tambahusers','UsersController@tambah');
Route::post('/users/store','UsersController@store');
Route::get('/users/editusers/{no}','UsersController@edit');
Route::post('/users/update','UsersController@update');
Route::get('/users/hapus/{no}','UsersController@hapus');
//route buat crud paket
Route::get('/paket', 'paketController@index');
Route::get('/paket/tambahpaket','PaketController@create');
Route::post('/paket/proses','PaketController@store');
Route::get('/paket/editpaket/{id}','PaketController@edit');
Route::put('/paket/update/{id}','PaketController@update');
Route::get('/paket/destroy/{id}','PaketController@destroy');
Route::get('/showpakett/{id}','PaketController@show');

//route buat crud manasik
Route::get('/manasik', 'ManasikController@index');
Route::get('/manasik/tambahmanasik','ManasikController@create');

Route::get('/manasik/destroy/{id}','ManasikController@destroy');
Route::get('/manasik/showmanasik/{id}','ManasikController@show');
Route::post('/manasik/store','ManasikController@store');
Route::get('/manasik/editmanasik/{id}','ManasikController@edit');
Route::put('/manasik/update/{id}','ManasikController@update');

//route buat crud pengguna
Route::get('/pengguna', 'PenggunaController@index');
Route::get('/pengguna/tambahpengguna','PenggunaController@create');
Route::post('/pengguna/store','PenggunaController@store');
Route::get('/pengguna/editpengguna/{id}','PenggunaController@edit');
Route::post('/pengguna/update','PenggunaController@update');
Route::get('/pengguna/destroy/{id}','PenggunaController@destroy');
Route::get('/showpakett','PenggunaController@pakett');
Route::get('/showmanasik','PenggunaController@manasik');

//login User
Route::get('/home_user', 'LoginUserController@index');
Route::get('/loginuser', 'LoginUserController@loginuser');
Route::post('/loginPost', 'LoginUserController@loginPost');
Route::get('/register', 'LoginUserController@register');
Route::post('/registerPost', 'LoginUserController@registerPost');
Route::get('/logout', 'LoginUserController@logout');
//login admin
Route::get('/homeadmin', 'LoginAdminController@index');
Route::get('/loginadmin', 'LoginAdminController@loginadmin');
Route::post('/loginadminPost', 'LoginAdminController@loginadminPost');
Route::get('/registeradmin', 'LoginAdminController@registeradmin');
Route::post('/registeradminPost', 'LoginAdminController@registeradminPost');
Route::get('/logoutadmin', 'LoginAdminController@logoutadmin');
// Route untuk upload
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//Route PemesananUser
Route::get('/homeuser/pemesanan', 'PemesananUserController@index');
Route::get('/homeuser/tambahpesan/', 'PemesananUserController@create');
Route::post('/homeuser/tambahpesan/proses', 'PemesananUserController@store');
Route::get('/pemesanan/editpesan{id}', 'PemesananUserController@edit');
Route::post('/pemesanan/update', 'PemesananUserController@update');
Route::get('/homeuser/showpesan','PemesananUserController@show');


//Route PemesananAdmin
Route::get('/admin/pemesanan', 'PemesananController@index');
Route::post('/pemesanan', 'PemesananController@store');
Route::get('/pemesanan/editpesan/{id}', 'PemesananController@edit');
Route::put('/pemesanan/update', 'PemesananController@update');
Route::get('/pemesanan/destroy/{id}', 'PemesananController@destroy');
Route::get('pemesanan/showpesan','PemesananController@show');

//Route TransaksiUser
Route::get('/homeuser/transaksi', 'TransaksiUserController@index');
Route::get('/homeuser/tambahtf', 'TransaksiUserController@create');
Route::get('/transaksi/showtransaksi','TransaksiUserController@show');
Route::post('/homeuser/tambahtf/proses', 'TransaksiUserController@store');

//Route TransaksiAdmin
Route::get('/transaksi', 'TransaksiController@index');
Route::get('/transaksi/edittransaksi/{id}','TransaksiController@edit');
Route::get('/transaksi/update','TransaksiController@update');
Route::get('/transaksi/hapus/{id}', 'TransaksiController@destroy');





