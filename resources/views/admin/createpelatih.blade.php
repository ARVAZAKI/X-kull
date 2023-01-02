@extends('layouts.app2')
@section('title','create ekstra')
@section('content')
<div class="row">
    <div class = "col-lg 12">
        <div class = "card shadow mb-4">
            <div class = "card header py-3">
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

                <form method ="GET" enctype ="multipart/form-data" action="{{route('make.pelatih')}}">
                    @csrf
                    <div class = "form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value = "{{ old('nama')}} ">
                    </div>
                    {{-- <div class = "form-group">
                        <label for="foto">foto</label>
                        <input type="file" class="form-control-file" id="foto"
                         name="foto" value = "{{ old('foto')}}">
                    </div> --}}
                    {{-- <div class = "form-group">
                        <label for="id_ekstra">id ekstra</label>
                        <input type="text" class="form-control" id="id_ekstra" name="id_ekstra" value = "{{ old('id_ekstra')}}">

                    </div> --}}

                    <div class="form-group pt-1">
                        <input type ="submit" class="btn btn-success" value="Simpan">
                        <a href="{{ route('pelatih.index') }}" class="btn btn-danger">Batal</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
