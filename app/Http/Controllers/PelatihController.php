<?php

namespace App\Http\Controllers;
use App\Models\Pelatih;
use App\Models\Ekstra;
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pelatih = Pelatih::all();
        $ekstra = Ekstra::all();
        $pelatih = Pelatih::with('ekstra')->get();
        return view('admin.masterpelatih',compact('pelatih','ekstra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ekstra = Ekstra::all();
        return view('admin.createpelatih',compact('ekstra'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi',
            'nama' => ':attribute minimal :min karakter',
            'max' => ':attribute max :max karakter',
            'numeric' => ':attribute harus angka',
            'mimes' => 'file :attribute harus bertipe jpg,jpeg,svg,png'

        ];
        $this->validate($request,[
            'nama' => 'required',
            'foto' => 'required',
            'ekstra_id' =>'required'
        ],$messages);
        $file = $request->file('foto');
        $foto = time() . '_' . $file->getClientOriginalName();
        $tujuan_upload = './template/img/';
        $file->move ($tujuan_upload,$foto);
        Pelatih::create([
            'nama' => $request->nama,
            'foto' => $foto,
            'ekstra_id' => $request->ekstra_id,
        ]);
        return redirect('/pelatih')->with('status', 'Berhasil menambah pelatih');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pelatih::with(['ekstra'])->findOrFail($id);
        return view('admin.showpelatih', compact('data'));
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
        $data=Pelatih::find($id)->delete();
        return redirect('/pelatih')->with('status', 'Berhasil menghapus pelatih');
    }
}
