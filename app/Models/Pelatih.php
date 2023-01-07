<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatih extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'foto',
        'ekstra_id'
    ];
    protected $table = 'pelatih';

    public function ekstra()
    {
        return $this->belongsTo(ekstra::class, 'ekstra_id', 'id');
    }
    public function agenda()
    {
        return $this->hasMany(agenda::class, 'pelatih_id', 'id');
    }

}
