@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Edit Item</div>

                <div class="card-body">
                    <form action="" class="">
                        <div class="form-group mb-1">
                            <label for="">Nama category</label>
                            <select class="form-control form-select" name="" id="">
                                <option value="">Makanan</option>
                                <option value="">Minuman</option>
                            </select>
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Nama item</label>
                            <input class = "form-control" type="text">
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Harga</label>
                            <input class="form-control" type="number" name="" id="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Stock</label>
                            <input class = "form-control" type="number">
                        </div>
                        <input class="btn btn-success" type="button" value="Simpan">
                        <input class="btn btn-danger" type="button" value="Batal">
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
