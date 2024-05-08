<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Models\produk;
use App\Models\Pengguna;
use App\Models\telepon;
use App\Models\merek;
use App\Models\prodak;
use App\Models\penjualan;
use App\Models\barang;
use App\Models\detail_penjualan;

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

Route::get('/data_merek',function () {
    // menampilkan semua data
    $mereks = merek::all();

    return view('tampil_merek', compact('mereks')); ; 
});

Route::get('/data_produk2',function () {
    // menampilkan semua data
    $prodaks = prodak::all();

    return view('tampil_prodak', compact('prodaks')); ; 
});

Route::get('/data_penjualan',function () {
    // menampilkan semua data
    $penjualans = penjualan::all();

    return view('tampil_penjualan', compact('penjualans')); ; 
});

Route::get('/data_barang',function () {
    // menampilkan semua data
    $barang = barang::all();

    return view('tampil_barang', compact('barang')); ; 
});

Route::get('/data_detail',function () {
    // menampilkan semua data
    $detail_penjualan = detail_penjualan::all();

    return view('tampil_detail', compact('detail_penjualan')); ; 
});