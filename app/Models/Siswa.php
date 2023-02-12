<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nisn',
        'jk',
        'kelas'
    ];
    protected $table = 'siswa';

   public function user()
   {
       return $this->hasOne(User::class, 'siswa_id', 'id');
   }
   public function ekstra()
    {
        return $this->belongsToMany(ekstra::class, 'ekstrasiswa', 'siswa_id', 'ekstra_id');
    }

}
