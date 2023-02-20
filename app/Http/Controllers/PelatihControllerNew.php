<?php

namespace App\Http\Controllers;
use App\Models\Ekstra;
use App\Models\EkstraPelatih;
use App\Models\Pelatih;
use App\Models\Agenda;
use App\Models\EkstraSiswa;
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

        $data = EkstraPelatih::paginate(10);
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
        $ekstra = Ekstra::with('pelatih','agenda')->findOrFail($id);
        $ekstrasiswa = EkstraSiswa::all();
        return view('pelatih.showekstra',compact('ekstra','ekstrasiswa'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
    public function agenda(Request $request){
        Agenda::create([
            'tanggal' => $request->tanggal,
            'agenda' => $request->agenda,
            'ekstra_id' => $request->ekstra_id,
            'pelatih_id' => $request->pelatih_id
        ]);
        return redirect()->back()->with('status', 'Berhasil menambah agenda');
    }
    public function exit($id)
    {
        $data=EkstraPelatih::find($id)->delete();
        return redirect('/ekstrapelatih')->with('status', 'Berhasil exit ekstra');
    }
    public function kick($id){
        $data = EkstraSiswa::find($id)->delete();
        return redirect()->back()->with('status', 'berhasil mengeluarkan siswa');
    }
    public function hapusAgenda($id){
        $data=Agenda::find($id)->delete();
        return redirect()->back()->with('status','berhasil menghapus agenda');
    }
    public function editAgenda(Request $request, $id){
        $messages = [
            'required' => ':attribute harus diisi',
        ];
        $this->validate($request,[
            'tanggal' => 'required',
            'agenda' => 'required',
            'pelatih_id' =>'required',
            'ekstra_id' =>'required'
        ],$messages);
        $item = Agenda::find($id);
        $item->tanggal = $request->tanggal;
        $item->agenda = $request->agenda;
        $item->pelatih_id = $request->pelatih_id;
        $item->ekstra_id = $request->ekstra_id;
        $item->update();
        return redirect()->back()->with('status','berhasil mengubah agenda');
    }
}
