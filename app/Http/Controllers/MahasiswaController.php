<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
	public function awal()
{
	return "Halo"; 
}
    public function tambah() {

	return $this->simpan();
}
	public function simpan()
{
	$mahasiswa = new Mahasiswa();
	$mahasiswa->nama = 'Nurul Istiqomah';
	$mahasiswa->nim = '1053678920';
	$mahasiswa->alamat = 'Wahid Hasyim';
	$mahasiswa->pengguna_id = '1';
	$mahasiswa->save();
	return "data dengan  <br> nama : {$mahasiswa->nama},<br> nim : {$mahasiswa->nim},<br> alamat : {$mahasiswa->alamat},<br> pengguna_id : {$mahasiswa->pengguna_id} <br> telah disimpan !!!";
	}
}
