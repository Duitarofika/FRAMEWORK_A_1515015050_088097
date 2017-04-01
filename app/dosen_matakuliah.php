<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable =['dosen_id','matakuliah_id'];

  public function jadwal_matakuliah()
  {
  		return $this->hasMany(jadwal_matakuliah::class);
  }
  public function dosen()
  {
  		return $this->hasMany(dosen::class);
  }
  public function mahasiswa()
  {
  		return $this->hasMany(mahasiswa::class);
  }
}
