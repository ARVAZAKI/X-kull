@extends('layouts.app2')
@section('title','show siswa')
@section('content-title',)
@section('content')

<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('./template/img/' .$data->foto) }}" width="250" class="img-thumbnail">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-left">nama ekstra : {{ $data->nama_ekstra }}</li>
                    @foreach ($data->pelatih as $item)
                    <p class = text-left >Pelatih :</p>
                    <img src="{{ asset('./template/img/' .$item->foto) }}" width="100" class="rounded-circle img-thumbnail">
                    <li class="list-group-item text-left">nama pelatih: {{ $item->nama }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-users"></i> Daftar Siswa</h6>
            </div>
            <div class="card-body">
                {{-- <h6>{{ $data->about}}</h6> --}}
            </div>
        </div>
        {{-- <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-briefcase"></i> Project Siswa</h6>
            </div>
            <div class="card-body"> --}}
                {{-- @foreach ($data->project as $p)
                <h6>nama project : {{ $p->nama_project }}</h6>
                <h6>tanggal pembuatan : {{ $p->tanggal }}</h6>
                <h6>deskripsi : {{ $p->deskripsi }}</h6>
                @endforeach --}}
            {{-- </div>
        </div> --}}

    </div>
    <div class="col-lg-4    ">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bars"></i> Jadwal Ekstra</h6>
            </div>
            <div class="card-body">
            <p>{{ $data->jadwal }}</p>
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-check-square"></i> Agenda</h6>
            </div>
            <div class="card-body">
            @foreach($data->agenda as $ag)
            <h6>tanggal : {{ $ag->tanggal }}</h6>
            <h6>agenda : {{ $ag->agenda }}</h6>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
