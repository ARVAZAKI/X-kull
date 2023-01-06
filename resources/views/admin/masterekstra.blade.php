@extends('layouts.app')
@section('title','Pendaftaran Ekstra')
@section('content-title')
@section('content')
<link rel="stylesheet" href="css/style.css">

<a class= "btn btn-success" href="{{ route('buat.ekstra') }}">Tambah ekstra</a>
<div class="row mt-3">
    <div class = "col-lg 12">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light">Daftar ekstra</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama ekstrakulikuler</th>
                            <th scope="col">Opsi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>

                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item->nama_ekstra}}</td>
                            <td><a href="" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
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
</div>
@endsection
