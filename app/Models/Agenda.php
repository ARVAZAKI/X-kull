<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = [
        'agenda ',
        'ekstra_id',
        'pelatih_id'
    ];
    protected $table = 'agenda';
    public function ekstra()
    {
        return $this->belongsTo(ekstra::class, 'ekstra_id', 'id');
    }

    public function pelatih()
    {
        return $this->belongsTo(pelatih::class, 'pelatih_id', 'id');
    }

}
