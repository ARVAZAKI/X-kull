<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelatih extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'foto'
    ];
    protected $table = 'pelatih';

    // public function ekstra()
    // {
    //     return $this->belongsTo(ekstra::class, 'ekstra_id', 'id');
    // }
    public function agenda()
    {
        return $this->hasMany(agenda::class, 'pelatih_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'pelatih_id', 'id');
    }

    public function ekstra()
    {
        return $this->belongsToMany(Ekstra::class, 'ekstrapelatih', 'pelatih_id', 'ekstra_id');
    }

    public function ekstrapelatih()
    {
        return $this->belongsTo(EkstraPelatih::class, 'pelatih_id', 'id');
    }

}
