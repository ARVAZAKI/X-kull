<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraSiswa extends Model{
    protected $fillable = [
        'id_ekstra'
    ];
    protected $table = 'EkstraSiswa';

    public function ekstra()
    {
        return $this->belongsTo(ekstra::class, 'ekstra_id', 'id');
    }
}
