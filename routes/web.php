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

//route ke admin

Route::get('/goadm1n', function () {
    return view('other/admin_template1');
});

Route::get('/goadm1n/home', 'admin_controller\main_controller@home');
Route::any('/ajax/updata/home', 'admin_controller\update_controller@home');


//route ke blog
Route::get('/', 'blog_controller\main_controller@home');

#profil desa

Route::get('/sejarah', 'blog_controller\main_controller@sejarah');
Route::get('/tentang', 'blog_controller\main_controller@tentang');
Route::get('/visi-misi', 'blog_controller\main_controller@vnm');

#

#kelembagaan

Route::get('/perangkat', 'blog_controller\main_controller@perangkat');
Route::get('/struktur-organisasi', 'blog_controller\main_controller@strk_org');
Route::get('/lpm', 'blog_controller\main_controller@lpm');
Route::get('/bpd', 'blog_controller\main_controller@bpm');
Route::get('/pkk', 'blog_controller\main_controller@pkk');
Route::get('/karang-taruna', 'blog_controller\main_controller@karang_taruna');


#

#anggaran

Route::get('/anggaran', 'blog_controller\main_controller@anggaran');


#

Route::get('/berita', function () {
    return view('blog/berita');
});



//route ke admin panel