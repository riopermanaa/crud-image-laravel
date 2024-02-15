@extends('layouts/main_layout')

@section('content')
<div class="container">
    <div class="col-5 card mx-auto mt-5 p-3">
        <h3>Form Edit Produk</h3>

        <hr>

        <form action="/edit-produk/{{ $data->id }}" method="post" enctype="multipart/form-data">

            @csrf

            {{-- Nama  --}}
            <div class="my-3">
                <label for="" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama produk..." value="{{ $data->nama }}">
            </div>
            {{-- Akhir nama --}}

            {{-- Gambar lama --}}
            <div class="my-3">
                <img src="{{ asset('storage/gambar_produk/' . $data->gambar) }}" alt="" width="200">
            </div>
            {{-- Akhir gambar lama  --}}

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


{{ $data->gambar }}
@endsection
