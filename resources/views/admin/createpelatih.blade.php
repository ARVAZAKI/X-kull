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
                     <select name="ekstra_id" id="inputGroupSelect01" class="custom-select">
                        <option selected>nama ekstra</option>
                        @foreach ($ekstra as $ekskul)
                        <option value="{{$ekskul->id}}">{{$ekskul->nama_ekstra}}</option>
                        @endforeach
                    </select>

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
