@extends('layouts.app')
@section('title','Pendaftaran Ekstra')
@section('content-title')
@section('content')

<a class= "btn btn-success" href="">Tambah ekstra</a>
<div class="row mt-3">
    <div class = "col-lg 12">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar ekstra</h6>
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
                        {{-- @foreach($ekstra as $item) --}}
                        <tr>
                            <td>1</td>
                            <td>Bola Volley putra</td>
                            <td>
                                <a href="" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                               <a href="" class = "btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                           
                            {{-- <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item['nama_ekstra']}}</td> --}}
                            
                            {{-- <a href="{{ route("mastersiswa.show", $item->id) }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a> --}}
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bola Basket Putra</td>
                            <td>
                                <a href="" class="btn btn-info"><i class="fas fa-info-circle"></i></a>
                                <a href="" class = "btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection