@extends('layouts/main_layout')

@section('content')
<div class="container">
    <div class="col-5 card mx-auto mt-5 p-3">
        <h3>Form Tambah Produk</h3>

        <hr>

        <form action="/tambah-produk" method="post" enctype="multipart/form-data">

            @csrf

            {{-- Nama  --}}
            <div class="my-3">
                <label for="" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama produk...">
            </div>
            {{-- Akhir nama --}}

            {{-- Gambar --}}
            <div class="my-3">
                <label for="gambar" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" name="gambar" id="gambar">
            </div>
            {{-- Akhir gambar --}}

            <div class="row">
                <div class="col-6">
                    <button class="btn btn-primary w-100">Submit</button>
                </div>
                <div class="col-6">
                    <a href="/" class="btn btn-danger w-100">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection