<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $guarded = [];

    public function karyawan(){
        return $this->hasMany('karyawan::class', 'status_id', 'id');
    }
}
