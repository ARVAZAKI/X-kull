<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EkstraSiswa extends Model{
    protected $fillable = [
        'users_id',
        'ekstra_id'
    ];
    protected $table = 'ekstrasiswa';


}
