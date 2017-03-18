<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;

class Jadwal_MatakuliahController extends Controller
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
	$jadwal_matakuliah = new Jadwal_Matakuliah();
	$jadwal_matakuliah->mahasiswa_id = '1';
	$jadwal_matakuliah->ruangan_id = '1';
	$jadwal_matakuliah->dosen_matakuliah = 'Duita Rofika';
	return "data dengan  <br> mahasiswa_id : {$jadwal_matakuliah->mahasiswa_id},<br> ruangan_id : {$jadwal_matakuliah->ruangan_id}, <br> dosen_matakuliah : {$jadwal_matakuliah->dosen_matakuliah} <br> telah disimpan !!!";
	}
}
