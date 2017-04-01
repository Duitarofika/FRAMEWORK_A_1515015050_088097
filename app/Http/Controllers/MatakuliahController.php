<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
	public function awal()
{
	return view('matakuliah.awal',['data'=>Matakuliah::all()]); 
}
    public function tambah() {

	return view('matakuliah.tambah');
}
	public function simpan(Requests $input)
{
	$matakuliah = new Matakuliah();
	$matakuliah->title =$input->title; 'Framework';
	$matakuliah->keterangan =$input->keterangan; 'Kouta sisa 5 orang';
	$informasi = $matakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
	return redirect('matakuliah')->(['informasi'=>$informasi]);
	}
public function edit($id);
{
	$matakuliah = Matakuliah::find($id);
	return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
}
public function lihat($id);
{
	$matakuliah = Matakuliah::find($id);
	return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
}
public function update($id, Requests $input)
{
	$matakuliah = Matakuliah::find($id);
	$matakuliah->title =$input->title;
	$matakuliah->keterangan =$input->keterangan;
	$informasi = $matakuliah-> save() ? 'Berhasil update data' : 'Gagal update data';
	return redirect('matakuliah')->with(['informasi'=>$informasi]);
}
public function hapus($id)
{
	$pengguna = Pengguna::find($id);
	$informasi = $pengguna->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
	return redirect('pengguna')->with(['informasi'=>$informasi]);
	}
}