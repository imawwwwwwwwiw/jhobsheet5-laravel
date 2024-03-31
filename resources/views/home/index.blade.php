@extends('layouts.app')
 
@section('body')
     <div class="container">
        <h1>Daftar Produk</h1>
        <table class="table table-hover">
            <thead class="table-danger">
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Kode Produk</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
    @foreach ($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->title }}</td>
                        <td class="align-middle">{{ $rs->price }}</td>
                        <td class="align-middle">{{ $rs->product_code }}</td>
                        <td class="align-middle">{{ $rs->description }}</td>
                        <td class="align-middle">
                    </tr>
    @endforeach
    </div>
@endsection