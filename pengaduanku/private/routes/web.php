<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'UserController\HomeController@web');

Auth::routes();


Route::get('/isi', 'AduanController@create')->name('isi');
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController\AdminController@index')->name('admin.home');
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');

    Route::get('/list-aduan', 'AdminController\AduanAdminController@index')->name('admin.aduan');
    Route::get('/list-user', 'AdminController\AduanAdminController@listUser')->name('admin.user');
    Route::get('/detail-aduan', 'AdminController\AduanAdminController@show')->name('admin.detailAduan');
    Route::get('/list-pengadu', 'AdminController\PengaduController@index')->name('admin.pengadu');
    Route::get('/detail-pengadu', 'AdminController\PengaduController@show')->name('admin.detailPengadu');

    Route::get('/aduan', 'InstansiController@index')->name('admin.instansi');


    Route::get('/kategori-aduan', 'AdminController\KategoriController@index')->name('admin.kategori');
    Route::post('/kategori-aduan/store', 'AdminController\KategoriController@store')->name('admin.kategori.store');

});

Route::prefix('/')->group(function() {
    Route::get('/home', 'UserController\HomeController@index')->name('home');
    Route::get('/detail/{id}', 'UserController\AduanController@show')->name('aduan.detail');

    Route::get('/isi', 'UserController\AduanController@create')->name('isiaduan');
    Route::post('/isi/store', 'UserController\AduanController@store')->name('isiaduan.store');

    Route::get('/riwayat', 'UserController\AduanController@riwayat')->name('riwayat.aduan');
    Route::get('/detailriwayat/{$id}', 'UserController\AduanController@detailRiwayat')->name('detail.riwayat.aduan');
    Route::put('/riwayat/{$id}', 'UserController\AduanController@destroy')->name('riwayat.update');
    Route::get('/profile/{id}', 'UserController\UserController@edit')->name('profile');
    Route::get('/all-aduan', 'UserController\AduanController@index')->name('blog');
    Route::get('/bantuan', 'UserController\UserController@help')->name('help');


    Route::patch('/riwayat/{id}/update', 'UserController\AduanController@destroy')->name('aduan.destroy');


});


