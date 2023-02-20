@extends('layouts.app')
@section('title','Daftar Pelatih')
@section('content')

<link rel="stylesheet" href="css/style.css">
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="row mt-3">
    <div class = "col-lg-8">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Daftar Pelatih</h6>
            </div>
            <div class="card-body">
                <table class="table table-responsive-lg">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            {{-- <th scope="col">Ekstra</th> --}}
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pelatih as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item->nama}}</td>
                            {{-- <td>{{ $item->ekstra['nama_ekstra']}}</td> --}}
                            <td>
                                {{-- <a href="pelatih/{{ $item->id }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a> --}}
                                <a href="{{ route("pelatih.hapus", $item->id) }}"
                                    class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-shadow mb-4 bg-white">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Tambah pelatih</h6>
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
                <form method ="POST" enctype ="multipart/form-data" action="{{route('pelatih.store')}}">
                    @csrf
                    <div class = "form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value = "{{ old('nama')}} ">
                    </div>
                    <div class = "form-group">
                        <label for="foto">foto</label>
                        <input type="file" class="form-control-file" id="foto"
                         name="foto" value = "{{ old('foto')}}">
                    </div>

                    <div class="form-group pt-3">
                        <input type ="submit" class="btn btn-success" value="Simpan">
                        <a href="{{ route('pelatih.index') }}" class="btn btn-danger">Batal</a>
                    </div>

                </form>
        </div>
    </div>
</div>
</div>
@endsection
