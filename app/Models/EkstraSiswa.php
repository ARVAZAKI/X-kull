<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraSiswa extends Model{
    protected $fillable = [
        'id_ekstra'
    ];
    protected $table = 'EkstraSiswa';
    /**
     * Get the user that owns the EkstraSiswa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ekstra()
    {
        return $this->belongsTo(ekstra::class,'ekstra_id','id');
    }
}
