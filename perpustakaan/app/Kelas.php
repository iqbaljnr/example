<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    
    protected $primarykey = 'id_kelas';

    public function siswakelas(){
        return $this->hasMany(Siswa::class,'id_kelas');
    }
}
