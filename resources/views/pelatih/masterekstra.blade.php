@extends('layouts.app')
@section('title','Daftar Ekstra')
@section('content-title')
@section('content')
<link rel="stylesheet" href="css/style.css">

{{-- <a class= "btn btn-success" href="{{ route('ekstrak.create') }}">Tambah ekstra</a> --}}
<div class="container">

<div class="row mt-3">
    <div class = "col-lg-12">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Daftar Ekstra</h6>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama ekstrakulikuler</th>
                            {{-- <th scope="col">Pelatih</th> --}}
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <form action="{{ route('ekstrapelatih.store') }}" method="POST">
                                @csrf
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item->nama_ekstra}}</td>
                            <td>
                                <input type="hidden" name="pelatih_id" value="{{ auth()->user()->pelatih_id }}">
                                <input type="hidden" name="ekstra_id" value="{{ $item->id }}">
                                 <input type="submit" value="join" class="btn btn-success btn-sm">
                            </td>
                        </form>
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
