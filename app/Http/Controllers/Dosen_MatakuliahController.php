<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;

class Dosen_MatakuliahController extends Controller
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
	$dosen_matakuliah = new Dosen_Matakuliah();
	$dosen_matakuliah->dosen_id = '1';
	$dosen_matakuliah->matakuliah_id = '1';
	return "data dengan  <br> dosen_id : {$dosen_matakuliah->dosen_id},<br> matakuliah_id : {$dosen_matakuliah->matakuliah_id}, <br> telah disimpan !!!";
	}
}
