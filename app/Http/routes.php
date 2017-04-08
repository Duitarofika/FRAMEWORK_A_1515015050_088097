<?php

Route::get('/', function () {
    return view('master');
});

Route::get('/public', function () {
    return "Nama : Duita Rofika <br> NIM : 1515015050";
});

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');

Route::get('pengguna{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/edit/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah{matakuliah}','PenggunaController@lihat');
Route::post('matakuliah/simpan','PenggunaController@simpan');
Route::get('matakuliah/edit/{matakuliah}','PenggunaController@edit');
Route::post('matakuliah/edit/{matakuliah}','PenggunaController@update');
Route::get('matakuliah/edit/{matakuliah}','PenggunaController@hapus');

Route::get('ruangan{ruangan}','PenggunaController@lihat');
Route::post('ruangan/simpan','PenggunaController@simpan');
Route::get('ruangan/edit/{ruangan}','PenggunaController@edit');
Route::post('ruangan/edit/{ruangan}','PenggunaController@update');
Route::get('ruangan/edit/{ruangan}','PenggunaController@hapus');

Route::get('mahasiswa{mahasiswa}','PenggunaController@lihat');
Route::post('mahasiswa/simpan','PenggunaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','PenggunaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','PenggunaController@update');
Route::get('mahasiswa/edit/{mahasiswa}','PenggunaController@hapus');

Route::get('jadwal_matakuliah{jadwal_matakuliah}','PenggunaController@lihat');
Route::post('jadwal_matakuliah/simpan','PenggunaController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','PenggunaController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','PenggunaController@update');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','PenggunaController@hapus');

Route::get('dosen_matakuliah{dosen_matakuliah}','PenggunaController@lihat');
Route::post('dosen_matakuliah/simpan','PenggunaController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','PenggunaController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','PenggunaController@update');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','PenggunaController@hapus');

Route::get('dosen{dosen}','PenggunaController@lihat');
Route::post('dosen/simpan','PenggunaController@simpan');
Route::get('dosen/edit/{dosen}','PenggunaController@edit');
Route::post('dosen/edit/{dosen}','PenggunaController@update');
Route::get('dosen/edit/{dosen}','PenggunaController@hapus');

Route::get('mahasiswa{mahasiswa}','MahasiswaController@lihat');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@hapus');

Route::get('mahasiswa','MahasiswaController@awal');
Route::post('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');
Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');


