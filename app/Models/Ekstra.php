<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstra extends Model
{
        protected $fillable = [
            'nama_ekstra',
            'jadwal',
            'id_pelatih'
        ];
        protected $table = 'Ekstra';


        public function pelatih()
        {
            return $this->belongsTo(pelatih::class, 'pelatih_id', 'id');
        }

        public function ekstrasiswa()
        {
            return $this->hasMany(ekstrasiswa::class, 'ekstrasiswa_id', 'id');
        }

        public function agenda()
        {
            return $this->hasMany(agenda::class, 'foreign_key', 'local_key');
        }

       



    }

