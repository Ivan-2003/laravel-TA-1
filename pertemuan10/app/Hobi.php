<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $guarded = [];

    public function karyawan(){
        return $this->belongsToMany(karyawan::class, 'hobi_karyawans', 'karyawan_id', 'hobi_id');
    }
}
