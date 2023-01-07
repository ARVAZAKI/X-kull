<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstra extends Model
{
        protected $fillable = [
            'nama_ekstra',
            'foto',
            'jadwal'
        ];
        protected $table = 'Ekstra';


        public function pelatih()
        {
            return $this->hasMany(pelatih::class);
        }
         public function agenda()
        {
            return $this->hasMany(agenda::class, 'foreign_key', 'local_key');
        }
        public function siswa()
        {
        return $this->belongsToMany(siswa::class, 'ekstrasiswa', 'ekstra_id', 'siswa_id');
        }
    }

