@extends('layouts.app')
@section('title','Daftar Ekstra')
@section('content-title')
@section('content')
<link rel="stylesheet" href="css/style.css">

{{-- <a class= "btn btn-success" href="{{ route('ekstrak.create') }}">Tambah ekstra</a> --}}
<div class="container">
<div class="row mt-3">
    <div class = "col-lg-8">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Daftar ekstra</h6>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama ekstrakulikuler</th>
                            <th scope="col">Pelatih</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item->nama_ekstra}}</td>
                            <td>
                                @foreach($item->pelatih as $pelatih)
                                - {{ $pelatih->nama }} <br>
                                @endforeach
                            </td>
                            <td><a href="ekstrak/{{ $item->id }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                <a href="{{ route("ekstrak.hapus", $item->id) }}"
                                    class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class = "col-lg-4">
        <div class = "card shadow mb-4">
            <div class = "card header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Create Ekstra</h6>
            </div>

            <div class="card-body">
                @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

                <form method ="POST" enctype ="multipart/form-data" action="{{ route('ekstrak.store') }}">
                    @csrf
                    <div class = "form-group">
                        <label for="nama_ekstra">nama ekstra</label>
                        <input type="text" class="form-control" id="nama_ekstra" name="nama_ekstra" value = "{{ old('nama_ekstra')}} ">
                    </div>
                    <div class = "form-group">
                        <label for="jadwal">jadwal</label>
                        <input type="text" class="form-control" id="jadwal" name="jadwal" value = "{{ old('jadwal')}} ">
                    </div>
                    <div class = "form-group">
                        <label for="foto">foto</label>
                        <input type="file" required="required" class="form-control-file" id="foto"
                         name="foto" value = "{{ old('foto')}}">
                    </div>
                    {{-- <select name="pelatih_id" id="inputGroupSelect01" class="custom-select">
                        <option selected>nama pelatih</option>
                        @foreach ($pelatih as $coach)
                        <option value="{{$coach->id}}">{{$coach->nama}}</option>
                        @endforeach
                    </select> --}}
                    <div class="form-group pt-3">
                        <input type ="submit" class="btn btn-success" value="Simpan">
                        <a href="{{ route('ekstrak.index') }}" class="btn btn-danger">Batal</a>
                    </div>

                </form>
            </div>

</div>
</div>
@endsection
