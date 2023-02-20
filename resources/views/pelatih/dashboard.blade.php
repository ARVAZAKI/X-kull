@extends('layouts.app')
@section('title','dashboard')
@section('content-title')
@section('content')
<link rel="stylesheet" href="css/style.css">
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
                <h6 class="m-0 font-weight-bold text-light text-center">Ekstra</h6>
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
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ekstra->nama_ekstra }}</td>
                            <td>
                                <a href="{{ route('ekstrapelatih.show',$item->ekstra->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                                <a href="{{ route('ekstrapelatih.exit',$item->id) }}" class="btn btn-danger btn-sm">Exit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="agendamodal" tabindex="-1" aria-labelledby="agendamodal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="agendamodal">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>hai</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
<div class="modal fade" id="modalagenda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambahnkan Agenda</h5>
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
                <label for="ekstra_id">ekstra</label>
                <select name="ekstra_id" class="form-control">
                    <option value="">Pilih ekstra</option>
                    @foreach($data as $ekstra)
                    <option value="{{ $ekstra->ekstra->id }}">{{ $ekstra->ekstra->nama_ekstra }}</option>
                    @endforeach
                </select>
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


