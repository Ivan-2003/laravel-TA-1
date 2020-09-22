<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';
    protected $guarded = [];

    public function karyawan(){
        return $this->hasMany('karyawan::class', 'divisi_id', 'id');
    }
}
