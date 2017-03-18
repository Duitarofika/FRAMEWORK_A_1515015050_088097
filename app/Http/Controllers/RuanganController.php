<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
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
	$ruangan = new Ruangan();
	$ruangan->title = '411 A';
	return "data dengan  <br> title: {$ruangan->title}<br> telah disimpan !!!";
	}
}