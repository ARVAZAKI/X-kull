<?php

namespace App\Http\Controllers;
use App\Models\Ekstra;
use App\Models\EkstraPelatih;
use App\Models\Pelatih;
use App\Models\Agenda;
use Illuminate\Http\Request;

class PelatihControllerNew extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EkstraPelatih::with('ekstra')->get();
        return view('pelatih.dashboard', compact('data'));
    }
    public function index2(){
        $data = Ekstra::all();
        return view('pelatih.masterekstra', compact('data'));
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
        EkstraPelatih::create([
            'pelatih_id' => $request->pelatih_id,
            'ekstra_id' => $request->ekstra_id
        ]);
        return redirect('/ekstrapelatih')->with('status', 'Berhasil join ekstra');
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
        return view('pelatih.showekstra',compact('data'));
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
    public function agenda(Request $request){
        Agenda::create([
            'ekstra_id' => $request->ekstra_id,
            'pelatih_id' => $request->pelatih_id
        ]);
        return redirect('/ekstrapelatih')->with('status', 'Berhasil menambah agenda');
    }
    public function exit($id)
    {
        $data=EkstraPelatih::find($id)->delete();
        return redirect('/ekstrapelatih')->with('status', 'Berhasil exit ekstra');
    }
}
