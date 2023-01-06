<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraSiswa extends Model{
    protected $fillable = [
        'siswa_id',
        'id_ekstra'
    ];
    protected $table = 'EkstraSiswa';

}
