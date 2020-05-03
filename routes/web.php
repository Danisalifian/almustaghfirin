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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PageController@index');
Route::get('/berita', 'PageController@berita')->name('berita');
Route::get('/galeri','PageController@galeri')->name('galeri');
Route::get('/tentang','PageController@tentang')->name('tentang');
Route::get('/galeri/gambar','PageController@photo')->name('photo');
Route::get('/galeri/video','PageController@video')->name('video');
Route::get('/trial', 'PageController@trial')->name('trial');
Route::get('/berita/{id}', 'PageController@show_berita')->name('show_berita');

Route::resource('posts', 'PostController');
Route::post('/posts/image_upload', 'PostController@upload')->name('upload');
// Route::get('/berita/{id}', 'PostController@show')->name('show');

Route::resource('videos', 'VideoController');
Route::resource('photos', 'PhotoController');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/bantuan', 'DashboardController@bantuan')->name('bantuan');