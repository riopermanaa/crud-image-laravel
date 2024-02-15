@extends('layouts/main_layout')

@section('content')
    <div class="container">


        {{-- Judul --}}
        <div class="row mt-5 justify-content-between">
            <div class="col-9">
                <h1>Data Produk</h1>
            </div>
           
            <div class="col-3">
                <a href="/tampil-tambah" class="btn btn-success w-100">Tambah Produk +</a>
            </div>
        </div>
        {{-- Akhir judul --}}

        {{-- Content --}}
        <table class="table table-bordered mt-3">
            <thead>
                <th class="bg-dark text-center text-white">No</th>
                <th class="bg-dark text-center text-white">Nama Produk</th>
                <th class="bg-dark text-center text-white">Gambar</th>
                <th class="bg-dark text-center text-white">Aksi</th>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>
                            <img src="{{ asset('storage/gambar_produk/'. $d->gambar) }}" alt="" width="200">
                        </td>
                        <td>
                            <a href="tampil-edit/{{ $d->id }}" class="btn btn-primary">Edit Produk</a>
                            <a href="hapus-produk/{{ $d->id }}" class="btn btn-danger">Hapus Produk</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Akhir content --}}
    </div>
@endsection