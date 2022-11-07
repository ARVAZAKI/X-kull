<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstra extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_ekstra',
        'jadwal',
        'foto',
        'id_pelatih'
        
    ];
    protected $table = 'ekstra';
    public function pelatih(){
        return $this->manyToOne('App\Models\Pelatih', 'id_ekstra');
    }
    public function siswa(){
        return $this->belongsToMany('App\Models\Siswa', 'id_ekstra');
    }
}
