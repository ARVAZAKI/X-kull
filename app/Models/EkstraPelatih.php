<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraPelatih extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function ekstra()
    {
        return $this->belongsTo(Ekstra::class, 'ekstra_id', 'id');
    }
    protected $table = "ekstrapelatih";
}
