<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nisn',
        'nama',
        'jk',
        'email'
    ];
    protected $table = 'siswa';
    public function Ekstrasiswa(){
        return $this->hasMany('App\Models\EkstraSiswa', 'id');
    }
}
