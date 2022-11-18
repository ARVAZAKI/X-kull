<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ekstra;
class EkstraController extends Controller
{
    public function index(){
        return view('admin.masterekstra',[
            "posts" => Ekstra::all()
        ]);
    }
}
