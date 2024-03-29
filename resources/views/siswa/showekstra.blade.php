@extends('layouts.app2')
@section('title','Detail ekstra')
@section('content-title',)
@section('content')
<div class="container-fluid">
    <a href="/dashboardsiswa" class="btn btn-success mb-3 btn-lg">back</a>
<div class="row">
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('./template/img/' .$data->foto) }}" width="250" class="img-thumbnail">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">{{ $data->nama_ekstra }}</li>
                    <li class="list-unstyled text-center">{{ $data->jadwal }}</li>
                    <p class ="text-left">Pelatih :</p>
                    @foreach ($data->pelatih as $item)
                    <li class="list-unstyled text-left">-{{ $item->nama }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bars"></i> Jadwal Ekstra</h6>
            </div>
            <div class="card-body">
            <p>{{ $data->jadwal }}</p>
            </div>
        </div>
    </div> --}}
    <div class="col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-check-square"></i> Agenda</h6>
            </div>
            <div class="card-body">
            <table class="table table-responsive-lg">
                <thead>
                    <th>no</th>
                    <th>tanggal</th>
                    <th>agenda</th>
                </thead>
                <tbody>
                    @foreach($data->agenda as $ag)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ag->tanggal }}</td>
                        <td>{{ $ag->agenda }}</td>
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
