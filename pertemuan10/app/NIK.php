<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NIK extends Model
{
    protected $table = 'nik';
    protected $guarded = [];

    public function Karyawan(){
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id');
    }
}
