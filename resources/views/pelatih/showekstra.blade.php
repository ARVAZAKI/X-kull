@extends('layouts.app2')
@section('title','Detail ekstra')
@section('content-title',)
@section('content')

<div class="container">
    @if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="row">
    <div class="col-lg-5">
       <table>
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <img src="{{ asset('./template/img/' .$ekstra->foto) }}" width="250" class="img-thumbnail">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center">{{ $ekstra->nama_ekstra }}</li>
                    <p>{{ $ekstra->jadwal }}</p>
                    @foreach ($ekstra->pelatih as $item)
                    <p class = text-left >Pelatih :</p>
                        <li class="list-unstyled text-left">-{{ $item->nama}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
       </table>
    </div>
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-check-square"></i> Agenda <a class="btn btn-success btn-sm" href="" data-toggle="modal" data-target="#modalagenda">
                    Tambah
                </a></h6>
            </div>
            <div class="card-body">
            <table class="table table-responsive-lg">
               <th>no</th>
               <th>tanggal</th>
               <th>agenda</th>
               <th>opsi</th>
               <tbody>
                @foreach($ekstra->agenda as $ag)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ag->tanggal }}</td>
                    <td>{{ $ag->agenda }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="" data-toggle="modal" data-target="#editagenda">
                            Edit
                        </a>
                        <a href="{{ route('ekstrapelatih.hapusagenda',$ag->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
               </tbody>
            </table>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-3">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bars"></i> Jadwal Ekstra</h6>
            </div>
            <div class="card-body">
            <p>{{ $ekstra->jadwal }}</p>
            </div>
        </div>
    </div> --}}
    <div class="col-lg-12">
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
                        <th scope="col">Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($ekstrasiswa as $siswa)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $siswa->siswa->nama }}</td>
                        <td>{{ $siswa->siswa->jk }}</td>
                        <td>{{ $siswa->siswa->kelas }}</td>
                        <td>
                            <a href="{{ route('siswa.kick',$siswa->id) }}" class="btn btn-danger btn-sm">keluarkan</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{-- <div class="d-flex">
                    {!! $users->links() !!}
                </div> --}}
            </div>
        </div>
</div>
</div>
<div class="modal fade" id="editagenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Agenda</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            @foreach($ekstra->agenda as $ag)
            <form action="{{ route('ekstrapelatih.editagenda',$ag->id) }}" method="POST">
                @endforeach
                @csrf
                <label for="tanggal">tanggal</label>
                <input type="date" name="tanggal" class="form-control">
                <label for="agenda">agenda</label>
                <input type="text" class="form-control" name="agenda">
                <input type="hidden" name="ekstra_id" value="{{ $ekstra->id }}">
                <input type="hidden" name="pelatih_id" value="{{ auth()->user()->pelatih_id }}">
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modalagenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambahkan Agenda</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('ekstrapelatih.agenda') }}" method="POST">
                @csrf
                <label for="tanggal">tanggal</label>
                <input type="date" name="tanggal" class="form-control">
                <label for="agenda">agenda</label>
                <input type="text" class="form-control" name="agenda">
                <input type="hidden" name="ekstra_id" value="{{ $ekstra->id }}">
                <input type="hidden" name="pelatih_id" value="{{ auth()->user()->pelatih_id }}">
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-success" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
