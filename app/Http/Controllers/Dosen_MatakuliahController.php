<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;

class Dosen_MatakuliahController extends Controller
{
	public function awal()
{
	return view('dosen_matakuliah.awal',['data'=>Dosen::all()]);
}
    public function tambah() {

	return view('dosen_matakuliah.tambah');
}
	public function simpan(Requests $input)
{
	$dosen_matakuliah = new Dosen_matakuliah();
	$dosen_matakuliah->dosen_id =$input->dosen_id; 
	$dosen_matakuliah->matakuliah_id =$input->matakuliah_id;  
	$informasi = $dosen_matakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('dosen_matakuliah')->(['informasi'=>$informasi]);
	}
	public function edit($id);
{
	$dosen = Dosen::find($id);
	return view('dosen.edit')->with(array('dosen'=>$dosen));
}
public function lihat($id);
{
	$dosen_matakuliah = Dosen_matakuliah::find($id);
	return view('dosen_matakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
}
public function update($id, Requests $input)
{
	$dosen_matakuliah = Dosen_matakuliah::find($id);
	$dosen_matakuliah->title =$input->title;
	$dosen_matakuliah->keterangan =$input->keterangan;
	$informasi = $dosen_matakuliah-> save() ? 'Berhasil update data' : 'Gagal update data';
	return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id)
{
	$dosen_matakuliah = Dosen_matakuliah::find($id);
	$informasi = $dosen_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
	return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
	}

}
