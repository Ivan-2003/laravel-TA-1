<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $guarded = [];

    public function nik(){
        return $this->hasOne(NIK::class, 'karyawan_id', 'id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }

    public function jabatan(){
        return $this->belongsTo(jabatan::class, 'jabatan_id', 'id');
    }

    public function status(){
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function hobi(){
        return $this->belongsToMany(Hobi::class, 'hobi_karyawans', 'karyawan_id', 'hobi_id');
    }
}
