@extends('layouts.app2')
@section('title','Detail ekstra')
@section('content-title',)
@section('content')

<div class="container">


<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('./template/img/' .$data->foto) }}" width="250" class="img-thumbnail">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">{{ $data->nama_ekstra }}</li>
                    <p class = text-left >Pelatih :</p>
                    @foreach ($data->pelatih as $item)
                    <li class="text-left list-unstyled">-{{ $item->nama }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-users"></i> Daftar Siswa</h6>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis kelamin</th>
                        {{-- <th scope="col">Kelas</th> --}}
                        <th scope="col">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Laki laki</td>
                        {{-- <td>12 TKJ 1</td> --}}
                        <td>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Laki laki</td>
                        {{-- <td>11 RPL 2</td> --}}
                        <td>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Laki laki</td>
                        {{-- <td>10 DKV 2</td> --}}
                        <td>
                            <a href="" class="btn btn-primary">Detail</a>
                            <a href="" class="btn btn-danger">Hapus</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bars"></i> Jadwal Ekstra</h6>
            </div>
            <div class="card-body">
            <p>{{ $data->jadwal }}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
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
</div>
@endsection
