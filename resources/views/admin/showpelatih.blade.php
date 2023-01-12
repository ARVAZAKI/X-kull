@extends('layouts.app2')
@section('title','Detail pelatih')
@section('content-title',)
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow">
                <div class="card-header text-center mb-4">
                    <h6 class="m-0 font-weight-bold text-center">Detail Pelatih</h6>
                </div>
                <img src="{{ asset('./template/img/' .$data->foto) }}" width="200" class="img-thumbnail mx-auto rounded-circle">
                <ul class="mt-4">
                    <li>Nama : {{ $data->nama }} </li>
                    <li>Ekstra : {{ $data->ekstra->nama_ekstra }}</li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endsection
