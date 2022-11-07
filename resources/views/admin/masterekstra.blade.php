@extends('admin.app')
@section('title','dashboard')
@section('content-title','dashboard')
@section('content')

{{-- <a class= "btn btn-success" href="{{ route('mastersiswa.create') }}">Tambah siswa</a> --}}
<div class="row">
    <div class = "col-lg 12">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data siswa</h6>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>   
                            <th scope="col">No.</th> 
                            <th scope="col">Nama ekstrakulikuler</th> 
                            <th scope="col">Action</th> 
                                
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item->}}</td>
                            <td>
                            <a href="{{ route("mastersiswa.show", $item->id) }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>