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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('berita','BeritaController');
Route::resource('pembina','PembinaController');
Route::resource('fasilitas','FasilitasController');
Route::resource('syarat','SyaratController');
Route::resource('paket','PaketController');
Route::post('paket/{publish}', 'PaketController@Publish')->name('paket.publish');
Route::resource('jadwal','JadwalController');
Route::resource('images', 'ImageController');
Route::resource('about', 'AboutController');
Route::resource('artikel','ArtikelController');
Route::post('artikel/{publish}', 'ArtikelController@Publish')->name('artikel.publish');


Route::get('blog','FronController@blog');
Route::get('blog/{id}', array('as' => 'singleblog', 'uses' =>'FronController@singleblog'));
Route::get('pakett','FronController@paket');
Route::get('aboutt','FronController@about');