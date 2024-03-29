@extends('layouts.app')
@section('title','dashboard')
@section('content-title')
@section('content')
<link rel="stylesheet" href="css/style.css">

{{-- <a class= "btn btn-success" href="{{ route('ekstrak.create') }}">Tambah ekstra</a> --}}

<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="row mt-3">
    <div class = "col-lg-12">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Daftar Ekstra yang diikuti</h6>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Ekstrakulikuler</th>
                            {{-- <th scope="col">Pelatih</th> --}}
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($data as $ekstra)
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $ekstra->ekstra->nama_ekstra }}</td>
                            <td>
                                <a href="/dashboardsiswa/{{ $ekstra->ekstra->id }}" class="btn btn-primary btn-sm">Lihat</a>
                                <a href="{{ route('ekstrasiswa.exit',$ekstra->id) }}" class="btn btn-danger btn-sm">Keluar</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
