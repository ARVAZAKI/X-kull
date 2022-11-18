<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstra
{
    private static $nama_ekstra = [
        [
            "nama_ekstra" => "Volley Putra",
            "slug" => "volley-putra"
        ],
        [
            "nama_ekstra" => "Volley Putri",
            "slug" => "volley-putri"
        ]
       
    ];
    public static function all(){
        return collect(Self::$nama_ekstra);
    }
    public static function find($slug){
        $ekstra = static::all();
        return $ekstra->Firstwhere('slug', $slug);

    }
}
