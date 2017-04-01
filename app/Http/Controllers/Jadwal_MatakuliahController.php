<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;

class Jadwal_MatakuliahController extends Controller
{
	public function awal()
{
	return view('jadwal_matakuliah.awal',['data'=>Jadwal_matakuliah::all()]); 
}
    public function tambah() {

	return view('jadwal_matakuliah.tambah');
}
	public function simpan(Requests $input)
{
	$jadwal_matakuliah = new Jadwal_matakuliah();
	$jadwal_matakuliah->jadwal_matakuliah_id =$input->jadwal_matakuliah_id; 
	$jadwal_matakuliah->ruangan_id =$input->ruangan_id; 
	$jadwal_matakuliah->dosen_matakuliah =$input->dosen_matakuliah;  
	$informasi = $jadwal_matakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('jadwal_matakuliah')->(['informasi'=>$informasi]);
	}
public function edit($id);
{
	$jadwal_matakuliah = jadwal_matakuliah::find($id);
	return view('jadwal_matakuliah.edit')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
}
public function lihat($id);
{
	$jadwal_matakuliah = jadwal_matakuliah::find($id);
	return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
}
public function update($id, Requests $input)
{
	$jadwal_matakuliah = jadwal_matakuliah::find($id);
	$jadwal_matakuliah->title =$input->title;
	$jadwal_matakuliah->keterangan =$input->keterangan;
	$informasi = $jadwal_matakuliah-> save() ? 'Berhasil update data' : 'Gagal update data';
	return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id)
{
	$jadwal_matakuliah = jadwal_matakuliah::find($id);
	$informasi = $jadwal_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
	return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
	}
}

