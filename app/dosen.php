<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table='Dosen';
    protected $fillable =['nama','nip','alamat','pengguna_id'];
}
