<?php

namespace App\Http\Controllers;
use file;
use App\Models\Ekstra;
use App\Models\Pelatih;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pelatih = Pelatih::all();
        $data = Ekstra::with('pelatih')->get();
        return view('admin.masterekstra',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createekstra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buatekstra(){
        $pelatih = Pelatih::all();
        return view('admin.createekstra', compact('pelatih'));
    }

    public function store(Request $request)
    {

    }

    public function makeekstra(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',
            'nama' => ':attribute minimal :min karakter',
            'max' => ':attribute max :max karakter',
            'numeric' => ':attribute harus angka',
            'mimes' => 'file :attribute harus bertipe jpg,jpeg,svg,png'

        ];
        $this->validate($request,[
            'nama_ekstra' => 'required',
            'jadwal' => 'required'
            // 'foto' => 'mimes:jpg,jpeg,svg,png'
        ],$messages);

        Ekstra::create([
            'nama_ekstra' => $request->nama_ekstra,
            'foto' => $request->foto,
            'jadwal' => $request->jadwal,
            'id_pelatih' => $request->id_pelatih
        ]);
        return redirect('/ekstrak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function hapus($id)
    {
        $data=Ekstra::find($id)->delete();
        return redirect('/ekstrak');


    }
}
