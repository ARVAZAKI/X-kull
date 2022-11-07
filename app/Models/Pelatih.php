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
        'id_ekstra'
    ];
    protected $table = 'pelatih';
    public function ekstra(){
        return $this->hasMany('App\Models\Ekstra', 'id_pelatih');
    }
}
