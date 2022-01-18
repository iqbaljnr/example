<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;     

    public function kelas(){
        return $this->belongsTo(kelas::class,'id_kelas','id_kelas');
    }
}
