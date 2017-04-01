<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table='Dosen';
    protected $fillable =['nama','nip','alamat','pengguna_id'];

    public function Pengguna() {
    return $this->belongsTo(Pengguna::class);
    }

    public function dosen_matakuliah() {
    return $this->hasMany(dosen_matakuliah::class);
    }
}
