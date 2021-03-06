<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriController;
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

Auth::routes(
    [
        'register' => false,
    ]
);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('kategori', KategoriController::class);
Route::resource('berita', BeritaController::class);

Route::resource('/', FrontendController::class);

// //hanya untuk role admin
// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
//     Route::get('/', function () {
//         return 'halaman admin';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

// //hanya untuk role pengguna
// Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function () {
//     Route::get('/', function () {
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile pengguna';
//     });
// });
// Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
//     Route::get('berita', function () {
//         return view('berita.index');
//     })->middleware(['role:admin|pengguna']);

//     Route::get('kategori', function () {
//         return view('kategori.index');
//     })->middleware(['role:admin']);
// });
