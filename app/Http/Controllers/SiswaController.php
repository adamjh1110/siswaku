<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function index() {
		$nama_kelompok = 'al ikhlas'; //string
		$jumlah_murid = 18; // integer
		$bisa_baca = true; // boolean (true|false)
		$daftar_murid = ['marwah', 'salman']; // array ['data_1', 'data_2',....'data_n']
		// (object)['merek'] = 'honda';
		// (object)['jenis_bahan_bakar'] = 'premium';
		// (object)['jumalh_ban'] = 2;
		
		$data = new \stdClass(); // (object)
		$data->nama_kelompok = $nama_kelompok;
		$data->jumlah_murid = $jumlah_murid;
		$data->bisa_baca = $bisa_baca;
		$data->daftar_murid = $daftar_murid;
		
		return view('pages.siswa', ['siswa' => $data ]);
	}
}
