<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $guarded = [];

    public function karyawan(){
        return $this->hasMany('karyawan::class', 'jabatan_id', 'id');
    }
}
