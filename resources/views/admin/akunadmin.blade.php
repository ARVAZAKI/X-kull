@extends('layouts.app')
@section('title','Akun admin')
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
    <div class = "col-lg-8">
        <div class = "card shadow mb-4">
            <div class = "card-header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Daftar Akun</h6>
            </div>
            <div class="card-body">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration}}</th>
                            <td>{{ $item->name}}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('admin.hapus',$item->id) }}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class = "col-lg-4">
        <div class = "card shadow mb-4">
            <div class = "card header py-3 bg-cstm">
                <h6 class="m-0 font-weight-bold text-light text-center">Create akun admin</h6>
            </div>

            <div class="card-body">
                @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors -> all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

                <form method ="POST" enctype ="multipart/form-data" action="{{ route('admin.create') }}">
                    @csrf
                    <div class = "form-group">
                        <label for="name">nama</label>
                        <input type="text" class="form-control" id="name" name="name" value = "{{ old('name') }}">
                    </div>
                    <div class = "form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" name="email" value = "{{ old('email') }}">
                    </div>
                    <div class = "form-group">
                        <label for="password">password</label>
                        <input type="password" class="form-control" id="password" name="password" value = "{{ old('password') }}">
                    </div>
                    <div class = "form-group">
                        <input type="hidden" class="form-control" id="role" name="role" value = "admin">
                    </div>
                    <div class="form-group pt-3">
                        <input type ="submit" class="btn btn-success" value="Simpan">
                        <a href="" class="btn btn-danger">Batal</a>
                    </div>

                </form>
            </div>

</div>
</div>
@endsection
