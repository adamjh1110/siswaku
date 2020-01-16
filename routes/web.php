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

/*
catatan pribadi
untuk developer lain
*/

Route::get('/', function () {
	return view('pages.homepage');
});

Route::get('/about', function () {
	return view('pages.about');
});

Route::get('siswa',function () {
	$nama_kelompok = 'al ikhlas'; //string
	$jumlah_murid = 18; // integer
	$bisa_baca = true; // boolean (true|false)
	$daftar_murid = ['marwah', 'salman']; // array ['data_1', 'data_2',....'data_n']
	// (object)['merek'] = 'honda';
	// (object)['jenis_bahan_bakar'] = 'premium';
	// (object)['jumalh_ban'] = 2;
	
	$data = new stdClass(); // (object)
	$data->nama_kelompok = $nama_kelompok;
	$data->jumlah_murid = $jumlah_murid;
	$data->bisa_baca = $bisa_baca;
	$data->daftar_murid = $daftar_murid;
	
	return view('pages.siswa', ['siswa' => $data ]);
});