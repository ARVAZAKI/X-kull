@extends('layouts.app')
@section('title','dashboard')
@section('content-title',)
@section('content')
<h5>Welcome {{ auth()->user()->name }}</h5>
@endsection
