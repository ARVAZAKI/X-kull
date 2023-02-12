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


        // public function pelatih()
        // {
        //     return $this->hasMany(pelatih::class, 'ekstra_id', 'id');
        // }
         public function agenda()
        {
            return $this->hasMany(agenda::class, 'ekstra_id', 'id');
        }
        public function siswa()
        {
        return $this->belongsToMany(siswa::class, 'ekstrasiswa', 'ekstra_id', 'siswa_id');
        }

        public function ekstrasiswa()
        {
            return $this->belongsTo(EkstraSiswa::class, 'ekstra_id', 'id');
        }

        public function pelatih()
        {
            return $this->belongsToMany(Pelatih::class, 'ekstrapelatih', 'ekstra_id', 'pelatih_id');
        }
    }

