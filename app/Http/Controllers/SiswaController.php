<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Ekstra;
use App\Models\ekstrasiswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use  Illuminate\Routing\Redirector;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekstrasiswa = EkstraSiswa::all();
        $data = Ekstrasiswa::with('ekstra')->get();
         return view('siswa.dashboard',compact('data','ekstrasiswa'));
    }

    public function index2(){
        $data = Ekstra::all();
        return view('siswa.masterekstra', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EkstraSiswa::create([
            'siswa_id' => $request->siswa_id,
            'ekstra_id' => $request->ekstra_id
        ]);
        return redirect('/dashboardsiswa')->with('status', 'Berhasil join ekstra');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Ekstra::with(['pelatih','agenda','siswa'])->findOrFail($id);
        return view('siswa.showekstra',compact('data'));
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
    public function exit($id)
    {
        $data=EkstraSiswa::find($id)->delete();
        return redirect('/dashboardsiswa')->with('status', 'Berhasil exit ekstra');
    }
}
