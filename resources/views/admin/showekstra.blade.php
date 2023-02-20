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
                    <li class="list-unstyled text-center">{{ $data->jadwal }}</li>
                    <p class = text-left >Pelatih :</p>
                    @foreach ($data->pelatih as $item)
                    <li class="list-unstyled text-left">-{{ $item->nama }}</li>
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
                        <th scope="col">Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($data->siswa as $siswa)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jk }}</td>
                        <td>{{ $siswa->kelas }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
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
