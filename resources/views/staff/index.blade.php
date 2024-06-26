@extends('layout.template')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-4">
            <form action="" class="d-flex" method="GET">
                <input type="date" class="form-control" name="query" placeholder="Cari...">
                <button type="submit" class="btn btn-sm btn-primary ml-2" style="margin-left: 5px">Cari</button>
                <button class="btn btn-sm btn-primary ml-2" style="margin-left: 4px">
                <a href="" style="text-decoration: none;color:white;">reset</a>
            </button>
            </form>
        </div>
        <div class="col-4"></div>
        <div class="col-4">
            <div class="mt-5">
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-sm btn-primary ml-2">tambah data</a>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table mt-5 table-stripped table-bordered table-hovered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Staff</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
@endsection