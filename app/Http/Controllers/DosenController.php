<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
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
	$dosen = new Dosen();
	$dosen->nama = 'Duita Rofika';
	$dosen->nip = '00417384598230';
	$dosen->alamat = 'Juanda 8';
	$dosen->pengguna_id = '1';
	$dosen->save();
	return "data dengan  <br> nama : {$dosen->nama},<br> nip : {$dosen->nip},<br> alamat : {$dosen->alamat},<br> pengguna_id : {$dosen->pengguna_id} <br> telah disimpan !!!";
	}
}
