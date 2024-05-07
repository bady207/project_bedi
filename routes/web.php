<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\produk;
use App\Models\Pengguna;
use App\Models\telepon;

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

Route::get('/about',function () {
    $nama = "bedi";
    $jk = "Laki-Laki";
    $almt = "Bandung";
    $pdk = "Smk";
    $pkr = "Petinju";
    return view('biodata', compact('nama','jk','almt','pdk','pkr'));
});

Route::get('/about2',function () {
    return view('biodata2');
});

Route::get('/contak',function () {
    return view('biodata3');
});

Route::get('/about2/{nama}/{jenis_kelamin}/{alamat}/{pendidikan}/{pekerjaan}',function (Request $request, $nama, $jenis_kelamin, $alamat, $pendidikan, $pekerjaan) {
    $nama2 = $nama;
    $jk = $jenis_kelamin;
    $alamt = $alamat;
    $pdk = $pendidikan;
    $pkr = $pekerjaan;
    return view('param', compact('nama2','jk','alamt','pdk','pkr'));
});

Route::get('/data_post',function () {
    // menampilkan semua data
    $posts = post::find(2);

    return $posts; 

    // return view('tampil_post', compact('posts')); 
});

Route::get('/data_produk',function () {
    // menampilkan semua data
    $produks = produk::all();

    return view('tampil_produk', compact('produks')); ; 
});

Route::get('/data_pengguna',function () {
    // menampilkan semua data
    $penggunas = pengguna::all();

    return view('tampil_pengguna', compact('penggunas')); ; 
});

Route::get('/data_telepon',function () {
    // menampilkan semua data
    $telepons = telepon::all();

    return view('tampil_telepon', compact('telepons')); ; 
});