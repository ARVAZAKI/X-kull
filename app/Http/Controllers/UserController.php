<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Pelatih;
use Illuminate\Hashing\BcryptHasher;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    public function adminindex()
    {
        $user = User::where('role', 'admin')->get();
        return view('admin.akunadmin',compact('user'));
    }
    public function siswaindex()
    {
        $siswa = Siswa::all();
        $user = User::where('role', 'siswa')->get();
        return view('admin.akunsiswa',compact('user','siswa'));
    }
    public function pelatihindex()
    {
        $user = User::where('role', 'pelatih')->get();
        $pelatih = Pelatih::all();
        return view('admin.akunpelatih',compact('user','pelatih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function createadmin(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',

        ];
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required'
        ],$messages);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);
        return redirect('/akunadmin');
    }
    public function createsiswa(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',

        ];
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required'
        ],$messages);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'siswa_id' => $request->siswa_id
        ]);
        return redirect('/akunsiswa');
    }
    public function createpelatih(Request $request){
        $messages = [
            'required' => ':attribute harus diisi',

        ];
        $this->validate($request,[
            'name' => 'required',
            'password' => 'required'
        ],$messages);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'pelatih_id' => $request->pelatih_id
        ]);
        return redirect('/akunpelatih');
    }
    public function hapusadmin($id)
    {
        $data=User::find($id)->delete();
        return redirect('/akunadmin');
    }
    public function hapussiswa($id)
    {
        $data=User::find($id)->delete();
        return redirect('/akunsiswa');
    }
    public function hapuspelatih($id)
    {
        $data=User::find($id)->delete();
        return redirect('/akunpelatih');
    }
}
