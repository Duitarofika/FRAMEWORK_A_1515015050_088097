<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
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
	$matakuliah = new Matakuliah();
	$matakuliah->title = 'Framework';
	$matakuliah->keterangan = 'Kouta sisa 5 orang';
	return "data dengan  <br> title : {$matakuliah->title},<br> keterangan : {$matakuliah->keterangan}, <br> telah disimpan !!!";
	}
}