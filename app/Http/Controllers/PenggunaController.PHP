<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
	public function awal(){
		return "Hello dari PenggunaController";

}
	public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$pengguna = new Pengguna();
	$pengguna->username = 'jon_doe';
	$pengguna->username = 'doe_jon';
	$pengguna->save();
	return "data denganusername {$pengguna->username} telah disimpan";
	}
}

