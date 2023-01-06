<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatih extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama'
    ];
    protected $table = 'pelatih';

    public function ekstra()
    {
        return $this->hasMany(ekstra::class, 'ekstra_id', 'id');
    }
    public function agenda()
    {
        return $this->hasMany(agenda::class, 'pelatih_id', 'id');
    }

}
