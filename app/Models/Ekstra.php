<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstra extends Model
{
        protected $fillable = [
            'nama_ekstra',
            'jadwal',
            'foto',
            'id_pelatih'
        ];
        protected $table = 'Ekstra';
    }

