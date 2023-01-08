@extends('layouts.app2')
@section('title','Detail ekstra')
@section('content-title')
@section('content')

<h2>Anda sedang melihat detail ekstra {{ $data->nama_ekstra }}</h2>
@foreach ($data->pelatih as $pelatih)
{{ $pelatih->nama }}

@endforeach
@endsection
