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
Route::get('Home', function () {
    return ('Halaman Home');
});
Route::get('About', function () {
    return ('Halaman About');
});
Route::get('Blog', function () {
    return ('Halaman Blog');
});
Route::get('Rumah', function () {
    return ('Halaman Rumah');
});
Route::get('asdf', function () {
    return ('.- -. .--- . .-.. .-.. ---');
});
route::get('/belajar', function () {
    echo '<h1>Hello World</h2>';
    echo '<p>Sedang Belajar Laravel</p>';
});
route::get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center"><u>Welcome To 11 RPL</u></h2>';
});
route::get('/siswa/{Anjello}', function ($Anjello) {
    return "Tampilkan data siswa bernama $Anjello";
});
route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek) {
    return "Cek Sisa Stok Untuk $jenis $merek";
});
route::get('/profile', function () {
    return view('profile');
});