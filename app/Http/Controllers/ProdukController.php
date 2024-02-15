<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function tampil_data(){
        $data = Produk::all();
        return view('data_produk', compact('data'));
    }

    public function tampil_tambah(){
        return view('tambah_produk');
    }

    public function tambah_data(Request $request){
        $nama_file = '';// buatlah variabel kosong untuk menampung nama file gambar


        
        //jika ada inputan berupa file 
        if($request->hasFile('gambar')){

            //maka baut variabel extensi kemudian minta file gambar dari inputan form kemudian dapatkan extensi file nya saja 
            $extensi = $request->file('gambar')->getClientOriginalExtension();

            $nama_file = $request->nama . '-' . time() . '.' . $extensi; // kemudian buat variabel nama file selanjutnya daptkan inputna nama dari form kemudian gabungkan dengan string dash gabungkan lagi dengan function time gabungkan lagi dengan string titik gabungkan lagi dengan variabel extensi 

            $request->file('gambar')->storeAs('gambar_produk', $nama_file); // selanjutnya dapatkan inputan gambar kemudian simpan pada folder storage selanjutnya buat folder gambar produk kemudian letakkan file di dalamnya 
        }
        
        $produk = Produk::create($request->all()); //masukkan ke dalam database semua inputan form dari user 
        $produk->gambar = $nama_file; // kolom gambar pada database akan diisi dengan variabel nama_file yang sudah kita buat tadi
        $produk->save(); // kemudian simpan
        
        return redirect('/');
    }

    public function tampil_edit($id){
        $data = Produk::find($id);
        return view('edit_produk', compact('data'));
    }

    public function edit_data(Request $request, $id){

        $data = Produk::find($id);
        $nama_file = $data->gambar;
        
        if($request->gambar != ''){
            Storage::delete('gambar_produk/' . $nama_file);
        }

        if($request->hasFile('gambar')){
            $extensi = $request->file('gambar')->getClientOriginalExtension();
            $nama_file = $request->nama . '-' . time() . '.' . $extensi;
            $request->file('gambar')->storeAs('gambar_produk', $nama_file);
        }

        $data->nama = $request->nama;
        $data->gambar = $nama_file;
        $data->save();


        return redirect('/');
    }

    public function hapus_data($id){
        $data = Produk::find($id);
        $data->delete();

        Storage::delete('gambar_produk/' . $data->gambar);
        return redirect('/');
    }
}